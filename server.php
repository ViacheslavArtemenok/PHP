<?php
session_start();
setcookie('arr_goods', getGoods());
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BRAND OF LUXERIOUS FASHION</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/logo.svg" type="image/x-icon">
</head>

<body>
    <?php
    getGoods();
    function getGoods()
    {
        if (!empty($_POST['good_name'])) { //ДОБАВЛЯЕМ ТОВАР В КУКИ
            $temp_arr = [];
            $temp_arr = json_decode($_COOKIE['arr_goods'], true);
            $change = 0;
            if (is_array($temp_arr)) {
                foreach ($temp_arr as $index => $item) {
                    if ($item['good'] == $_POST['good_name']) {
                        $temp_arr[$index]['quantity'] = ++$item['quantity'];
                        $change = 1;
                    }
                }
            }
            if ($change == 0) {
                $temp_arr[] =  ['good' => $_POST['good_name'], 'size' => $_POST['good_size'], 'price' => $_POST['good_price'], 'image' => $_POST['good_photo_name'], 'quantity' => $_POST['good_quantity']];
            }
            $_COOKIE['arr_goods'] = json_encode($temp_arr, true);
            return $_COOKIE['arr_goods'];
        } elseif (!empty($_POST['del_good'])) { //УДАЛИТЬ ОДИН ТОВАР ИЗ КУКИ
            $temp_arr = [];
            $temp_arr = json_decode($_COOKIE['arr_goods'], true);
            if (is_array($temp_arr)) {
                foreach ($temp_arr as $index => $item) {
                    if ($item['good'] == $_POST['del_good']) {
                        unset($temp_arr[$index]);
                    }
                }
            }
            $_COOKIE['arr_goods'] = json_encode($temp_arr, true);
            return $_COOKIE['arr_goods'];
        } elseif (!empty($_POST['size_good'])) { //ДОБАВЛЕНИЕ РАЗМЕРА
            $temp_arr = [];
            $temp_arr = json_decode($_COOKIE['arr_goods'], true);
            if (is_array($temp_arr)) {
                foreach ($temp_arr as $index => $item) {
                    if ($item['good'] == $_POST['size_good']) {
                        $temp_arr[$index]['size'] = $_POST['in_size'];
                    }
                }
            }
            $_COOKIE['arr_goods'] = json_encode($temp_arr, true);
            return $_COOKIE['arr_goods'];
        } elseif (!empty($_POST['quant_exch'])) { //КОЛИЧЕСТВО +/-
            $temp_arr = [];
            $temp_arr = json_decode($_COOKIE['arr_goods'], true);
            if (is_array($temp_arr)) {
                foreach ($temp_arr as $index => $item) {
                    if ($item['good'] == $_POST['quant_good'] && $_POST['quant_exch'] == "+") {
                        $temp_arr[$index]['quantity'] = ++$item['quantity'];
                    } elseif ($item['good'] == $_POST['quant_good'] && $_POST['quant_exch'] == "-" && $item['quantity'] > 1) {
                        $temp_arr[$index]['quantity'] = --$item['quantity'];
                    }
                }
            }
            $_COOKIE['arr_goods'] = json_encode($temp_arr, true);
            return $_COOKIE['arr_goods'];
        } elseif (!empty($_POST['del_all'])) { //ОЧИСТИТЬ КУКИ
            return '';
        } elseif (!empty($_COOKIE['arr_goods'])) { //ВЕРНУТЬ КУКИ
            return $_COOKIE['arr_goods'];
        }
    }
    if (!empty($_POST['good_name']) && empty($_POST['good_product'])) {
        header("Location: catalog.php?type={$_POST['good_number_g']}");
    } elseif (!empty($_POST['good_product'])) {
        header("Location: cart.php?cart=1");
    } elseif (!empty($_POST['del_good']) || !empty($_POST['del_all']) || !empty($_POST['size_good']) || !empty($_POST['quant_exch'])) {
        header("Location: cart.php?cart=1");
    }
    ?>
    <?php
    if ($_GET['del']) {
        session_destroy();
        header("Location: registration.php?action=1");
    }
    ?>
    <?php
    $salt1 = "6fbhg7BUU&vvys6g";
    $salt2 = "BbJb787yHH7h&uh7uyYh77hbkkdndhgd";
    if (!empty($_POST['name']) && $_POST['answer'] == $_POST['correct']) { //Добавление корректного отзыва в БД
        $get_name = strip_tags($_POST['name']);
        $get_city = strip_tags($_POST['city']);
        $path = "faces/" . $_FILES['photo']['name'];
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
            $show_info =  $_FILES['photo']['name'];
            echo $show_info;
        } else $show_info = "test.jpg";
        $sql_set = "INSERT INTO `reviews` (`id`, `name`, `city`, `photo_name`) VALUES (NULL, '$get_name', '$get_city', '$show_info');";
        $res = mysqli_query($connect, $sql_set);
        $file = file_get_contents('data.json');  // Открыть файл data.json
        $text_set = json_decode($file, true);
        $text_set[] = $_POST['text_review'];        // Представить новую переменную как элемент массива, в формате 'ключ'=>'имя переменной' и добавить в массив
        file_put_contents('data.json', json_encode($text_set, JSON_UNESCAPED_UNICODE));
        header("Location: reviews.php?rev=1");
    }
    ?>

    <?php
    if (!empty($_POST['check_pass'])) { // ЗАПРОС АВТОРИЗАЦИИИ
        $get_check_login = strip_tags($_POST['check_login']);
        $get_check_pass = $salt1 . md5(strip_tags($_POST['check_pass'])) . $salt2;
        $sql_auth = "SELECT `id`, `first_name`, `second_name`, `age`, `phone`, `gend`, `email`, `user_photo` from users WHERE `email`='$get_check_login' and `passw`='$get_check_pass';";
        $res_auth = mysqli_query($connect, $sql_auth);
        if (mysqli_num_rows($res_auth)) {
            $data_auth = mysqli_fetch_assoc($res_auth);
            foreach ($data_auth as $index => $item) {
                $_SESSION["$index"] = $item;
            }
            header("Location: registration.php?action=4");
        } else {
            header("Location: registration.php?action=1");
        }
    } ?>

    <?php
    if (!empty($_POST['email'])) { //ОБНОВЛЕНИЕ И ДОБАВЛЕНИЕ ЮЗЕРА В БД
        $get_first_name = strip_tags($_POST['first_name']);
        $get_second_name = strip_tags($_POST['second_name']);
        $get_age = strip_tags($_POST['age']);
        $get_phone = strip_tags($_POST['phone']);
        $get_gend = strip_tags($_POST['gend']);
        $get_email = strip_tags($_POST['email']);
        $get_passw = $salt1 . md5(strip_tags($_POST['passw'])) . $salt2;
        $path = "faces_users/" . $_FILES['photo_user']['name'];
        if (move_uploaded_file($_FILES['photo_user']['tmp_name'], $path)) {
            $show_user_photo =  $_FILES['photo_user']['name'];
        } else $show_user_photo = "test.jpg";
        if (!empty($_POST['updater'])) {
            $sql_user = "UPDATE `users` SET `first_name` = '$get_first_name', `second_name` = '$get_second_name', `age` = '$get_age', `phone` = '$get_phone', `gend` = '$get_gend', `user_photo` = '$show_user_photo' WHERE `email` = '$get_email' and `passw` = '$get_passw';";
        } else $sql_user = "INSERT INTO `users` (`first_name`, `second_name`, `age`, `phone`, `gend`, `email`, `passw`, `user_photo`) 
        VALUES ('$get_first_name', '$get_second_name', '$get_age', '$get_phone', '$get_gend', '$get_email', '$get_passw', '$show_user_photo');";
        if (mysqli_query($connect, $sql_user)) {
            header("Location: registration.php?action=3");
        } else $info_error = '<h3 class="pink_tittle">REGISTRATION ERROR</h3>'; ?>
        <header>
            <?php include "header.php"; ?>
        </header>

        <article>
            <div class="main_tittle_box">
                <div class="main_tittle_mini">
                    <?= $info_error ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>

    <?php
    if ($_POST['correct'] && $_POST['answer'] != $_POST['correct']) { //НЕВЕРНО ВВЕДЕНА КАПЧА
        $info_error = '<h3 class="pink_tittle">CAPTURE ERROR</h3>'; ?>
        <header>
            <?php include "header.php"; ?>
        </header>

        <article>
            <div class="main_tittle_box">
                <div class="main_tittle_mini">
                    <?= $info_error ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <script src="close.js"></script>
</body>

</html>