<?php
session_start();
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
    $total = 0;
    if (isset($_GET['cart']) && isset($_COOKIE['arr_goods'])) { //РЕНДЕР КОРЗИНЫ
        foreach (json_decode($_COOKIE['arr_goods'], true) as $index => $item) {
            $total = $total + $item['price'] * $item['quantity'];
    ?>
            <div class="cart_change_item">
                <img class="img_cart" src="img/<?= $item['image'] ?>" alt="product">
                <div class="cart_change_item_info">
                    <form action="server.php" method="POST" enctype="multipart/form-data">
                        <input hidden name="del_good" type="text" value="<?= $item['good'] ?>">
                        <input id="del_from_cart_<?= $item['good'] ?><?= $index ?>" type="submit" hidden>
                        <label for="del_from_cart_<?= $item['good'] ?><?= $index ?>"><svg class="cart_close" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.2453 9L17.5302 2.71516C17.8285 2.41741 17.9962 2.01336 17.9966 1.59191C17.997 1.17045 17.8299 0.76611 17.5322 0.467833C17.2344 0.169555 16.8304 0.00177586 16.4089 0.00140366C15.9875 0.00103146 15.5831 0.168097 15.2848 0.465848L9 6.75069L2.71516 0.465848C2.41688 0.167571 2.01233 0 1.5905 0C1.16868 0 0.764125 0.167571 0.465848 0.465848C0.167571 0.764125 0 1.16868 0 1.5905C0 2.01233 0.167571 2.41688 0.465848 2.71516L6.75069 9L0.465848 15.2848C0.167571 15.5831 0 15.9877 0 16.4095C0 16.8313 0.167571 17.2359 0.465848 17.5342C0.764125 17.8324 1.16868 18 1.5905 18C2.01233 18 2.41688 17.8324 2.71516 17.5342L9 11.2493L15.2848 17.5342C15.5831 17.8324 15.9877 18 16.4095 18C16.8313 18 17.2359 17.8324 17.5342 17.5342C17.8324 17.2359 18 16.8313 18 16.4095C18 15.9877 17.8324 15.5831 17.5342 15.2848L11.2453 9Z" fill="#575757" />
                            </svg></label>
                    </form>
                    <p class="cart_tittle"><?= $item['good'] ?></p>

                    <div class="cart_tittle_info">
                        <div>Price: <span class="cart_price_pink">$<?= $item['price'] ?></span></div>
                        <div class="quant">
                            <p>Quantity:</p>
                            <div class="render_quant_form">
                                <p class="render_quant"><?= $item['quantity'] ?></p>
                                <div class="render_waves">
                                    <form action="server.php" method="POST" enctype="multipart/form-data">
                                        <input hidden name="quant_good" type="text" value="<?= $item['good'] ?>">
                                        <input hidden name="quant_exch" type="text" value="+">
                                        <button class="render_w" type="submit"></button>
                                    </form>
                                    <form action="server.php" method="POST" enctype="multipart/form-data">
                                        <input hidden name="quant_good" type="text" value="<?= $item['good'] ?>">
                                        <input hidden name="quant_exch" type="text" value="-">
                                        <button class="render_w" type="submit"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <details class="render_details">
                            <summary class="list_summary add_width">
                                Size: <?= $item['size'] ?>
                                <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81723 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214Z" fill="#6F6E6E" />
                                </svg>
                            </summary>
                            <form class="input_render" action="server.php" method="POST" enctype="multipart/form-data">
                                <label for="size_from_cart_<?= $item['good'] ?><?= $index ?>" class="list_summary">Size:
                                    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81723 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214Z" fill="#6F6E6E" />
                                    </svg></label>
                                <label><input class="check_box" name="in_size" type="radio" value="XS"> XS</label>
                                <label><input class="check_box" name="in_size" type="radio" value="S"> S</label>
                                <label><input class="check_box" name="in_size" type="radio" value="M"> M</label>
                                <label><input class="check_box" name="in_size" type="radio" value="L"> L</label>
                                <label><input class="check_box" name="in_size" type="radio" value="XL"> XL</label>
                                <label><input class="check_box" name="in_size" type="radio" value="XXL"> XXL</label>
                                <input hidden name="size_good" type="text" value="<?= $item['good'] ?>">
                                <input id="size_from_cart_<?= $item['good'] ?><?= $index ?>" hidden type="submit">
                            </form>
                        </details>
                    </div>

                </div>
            </div>
    <?php
        }
    }
    ?>
    <?php
    if (isset($_GET['type'])) { ////////////РЕНДЕРИНГ КАТАЛОГА ТОВАРОВ
        $get_gender = $_GET['type'];
        if ($get_gender == 1) {
            $sql_get = "SELECT * FROM `men`";
            $some_gender = "men";
        } elseif ($get_gender == 2) {
            $sql_get = "SELECT * FROM `women`";
            $some_gender = "women";
        } elseif ($get_gender == 3) {
            $sql_get = "SELECT * FROM `kids`";
            $some_gender = "kids";
        }
        $res = mysqli_query($connect, $sql_get);
        //$data - ассоциативный массив, содержащий информацию о каждой ячейке в таблице. Название ключа
        //это название столбца
        $file = file_get_contents("data_" . $get_gender . ".json");  // Открыть файл data.json
        $taskList = json_decode($file, true);        // Декодировать в массив 
        while ($data = mysqli_fetch_assoc($res)) { //РЕНДЕР КАТАЛОГА
    ?>
            <div class="product_item">
                <form action="server.php" method="POST" enctype="multipart/form-data">
                    <div class="box_pict">
                        <img class="pict_img" src="img/<?= $data['photo_name'] ?>" alt="product">
                        <input hidden name="good_number_g" type="text" value="<?= $get_gender ?>">
                        <input hidden name="good_quantity" type="text" value="1">
                        <input hidden name="good_name" type="text" value="<?= $data['name'] ?>">
                        <input hidden name="good_size" type="text" value="">
                        <input hidden name="good_price" type="text" value="<?= $data['price'] ?>">
                        <input hidden name="good_photo_name" type="text" value="<?= $data['photo_name'] ?>">
                        <input id="fly_to_cart_<?= $some_gender ?>_<?= $data['id'] ?>" type="submit" hidden>
                        <label for="fly_to_cart_<?= $some_gender ?>_<?= $data['id'] ?>" class="bord_add_to_cart">
                            <div class="add_to_cart">
                                <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                                <p class="add_to_cart_text">Add to Cart</p>
                            </div>
                        </label>
                    </div>
                </form>
                <form action="product.php" method="POST" enctype="multipart/form-data">
                    <input hidden name="gender" type="text" value="<?= $some_gender ?>">
                    <input hidden name="name" type="text" value="<?= $data['name'] ?>">
                    <input hidden name="price" type="text" value="<?= $data['price'] ?>">
                    <input hidden name="number_g" type="text" value="<?= $get_gender ?>">
                    <input hidden name="photo_name" type="text" value="<?= $data['photo_name'] ?>">
                    <input hidden name="about" type="text" value="<?= $taskList[$data['id']] ?>">
                    <input id="prd_sub_<?= $some_gender ?>_<?= $data['id'] ?>" class="hide" type="submit">
                    <label for="prd_sub_<?= $some_gender ?>_<?= $data['id'] ?>">
                        <h3 class="pd_tittle"><?= $data['name'] ?></h3>
                        <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                            cool
                            Kym Ellery teams up with Moda Operandi.</p>
                        <p class="pd_price">$<?= $data['price'] ?></p>
                    </label>
                </form>
            </div>
    <?php
        }
    }
    ?>
    <?php
    if (isset($_GET['rev'])) { //РЕНДЕРИНГ ОТЗЫВОВ В ФАЙЛЕ reviews.php
        $sql_get = "SELECT * FROM `reviews`";
        $res = mysqli_query($connect, $sql_get);
        //$data - ассоциативный массив, содержащий информацию о каждой ячейке в таблице. Название ключа
        //это название столбца
        $file = file_get_contents('data.json');  // Открыть файл data.json
        $taskList = json_decode($file, true);
        $i = 1;      // Декодировать в массив 
        while ($data = mysqli_fetch_assoc($res)) { ?>
            <div class="review_block">
                <div class="review_left">
                    <img class="img_reviews" src="faces/<?= $data['photo_name'] ?>" alt="k">
                    <p><?= $data['name'] ?></p>
                    <p><?= $data['city'] ?></p>
                </div>
                <div>
                    <p class="text_right"><?= $taskList[$i] . "<br>" . "<br>" ?><?= date("H:i", strtotime($data['date'])) . "<br>" ?><?= date("d.m.Y", strtotime($data['date'])) ?></p>
                </div>
            </div>
    <?php
            $i++;
        }
    }
    ?>

    <?php
    if ($_GET['action'] == 1 || $_GET['action'] == 3) { //АВТОРИЗАЦИЯ
    ?>
        <form class="reg_block_left" action="server.php" method="POST" enctype="multipart/form-data">
            <p class="reg_tittle_name">Login details</p>
            <input class="reg_inp" name="check_login" type="email" required placeholder="Email">
            <input class="reg_inp" name="check_pass" type="password" required placeholder="Password">
            <p class="instr">Please use 8 or more characters, with at least 1 number and a mixture of uppercase and
                lowercase letters</p>
            <div class="button_box"> <button class="reg_gend_btn" type="submit">
                    JOIN NOW
                    <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.54 0.208095C11.6058 0.142131 11.684 0.0897967 11.77 0.0540883C11.8561 0.01838 11.9483 0 12.0415 0C12.1347 0 12.2269 0.01838 12.313 0.0540883C12.399 0.0897967 12.4772 0.142131 12.543 0.208095L16.7929 4.458C16.8589 4.5238 16.9112 4.60196 16.9469 4.68802C16.9826 4.77407 17.001 4.86632 17.001 4.95949C17.001 5.05266 16.9826 5.14491 16.9469 5.23097C16.9112 5.31702 16.8589 5.39518 16.7929 5.46098L12.543 9.71089C12.41 9.84389 12.2296 9.91861 12.0415 9.91861C11.8534 9.91861 11.673 9.84389 11.54 9.71089C11.407 9.57788 11.3323 9.39749 11.3323 9.2094C11.3323 9.0213 11.407 8.84091 11.54 8.70791L15.2898 4.95949L11.54 1.21107C11.474 1.14528 11.4217 1.06711 11.386 0.981059C11.3503 0.895005 11.3319 0.802752 11.3319 0.709584C11.3319 0.616415 11.3503 0.524162 11.386 0.438109C11.4217 0.352055 11.474 0.273891 11.54 0.208095Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.95948C0 4.77162 0.0746263 4.59146 0.207462 4.45862C0.340297 4.32579 0.52046 4.25116 0.708318 4.25116H15.583C15.7708 4.25116 15.951 4.32579 16.0838 4.45862C16.2167 4.59146 16.2913 4.77162 16.2913 4.95948C16.2913 5.14734 16.2167 5.3275 16.0838 5.46033C15.951 5.59317 15.7708 5.6678 15.583 5.6678H0.708318C0.52046 5.6678 0.340297 5.59317 0.207462 5.46033C0.0746263 5.3275 0 5.14734 0 4.95948Z" fill="white" />
                    </svg>
                </button>
                <a class="reg_reg_btn" href="registration.php?action=2">Registration</a>
            </div>
        </form>
    <?php
    }
    ?>

    <?php
    if ($_GET['action'] == 2) { //РЕГИСТРАЦИЯ

    ?>
        <form class="reg_block_left" action="server.php" method="POST" enctype="multipart/form-data">
            <p class="reg_tittle_name">Add new information</p>
            <input class="reg_inp" name="first_name" type="text" required placeholder="First Name">
            <input class="reg_inp" name="second_name" type="text" required placeholder="Last Name">
            <input class="reg_inp" name="age" type="number" required placeholder="Age">
            <input class="reg_inp" name="phone" type="tel" required placeholder="Phone: +0-000-000-0000">
            <div class="gender_box">
                <input class="reg_radio" name="gend" value="m" type="radio" required name="gender">
                <p class="gender">Male</p>
                <input class="reg_radio" name="gend" value="f" type="radio" required name="gender">
                <p class="gender">Female</p>
            </div>
            <p class="reg_tittle_name">Login details</p>
            <input class="reg_inp" name="email" type="email" required placeholder="Email">
            <input class="reg_inp" name="passw" type="password" required placeholder="Password">
            <input class="reg_inp" type="file" name="photo_user" accept="image/*">
            <p class="instr">Please use 8 or more characters, with at least 1 number and a mixture of uppercase and
                lowercase letters</p>
            <div class="button_box"> <button class="reg_gend_btn" type="submit">
                    JOIN NOW
                    <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.54 0.208095C11.6058 0.142131 11.684 0.0897967 11.77 0.0540883C11.8561 0.01838 11.9483 0 12.0415 0C12.1347 0 12.2269 0.01838 12.313 0.0540883C12.399 0.0897967 12.4772 0.142131 12.543 0.208095L16.7929 4.458C16.8589 4.5238 16.9112 4.60196 16.9469 4.68802C16.9826 4.77407 17.001 4.86632 17.001 4.95949C17.001 5.05266 16.9826 5.14491 16.9469 5.23097C16.9112 5.31702 16.8589 5.39518 16.7929 5.46098L12.543 9.71089C12.41 9.84389 12.2296 9.91861 12.0415 9.91861C11.8534 9.91861 11.673 9.84389 11.54 9.71089C11.407 9.57788 11.3323 9.39749 11.3323 9.2094C11.3323 9.0213 11.407 8.84091 11.54 8.70791L15.2898 4.95949L11.54 1.21107C11.474 1.14528 11.4217 1.06711 11.386 0.981059C11.3503 0.895005 11.3319 0.802752 11.3319 0.709584C11.3319 0.616415 11.3503 0.524162 11.386 0.438109C11.4217 0.352055 11.474 0.273891 11.54 0.208095Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.95948C0 4.77162 0.0746263 4.59146 0.207462 4.45862C0.340297 4.32579 0.52046 4.25116 0.708318 4.25116H15.583C15.7708 4.25116 15.951 4.32579 16.0838 4.45862C16.2167 4.59146 16.2913 4.77162 16.2913 4.95948C16.2913 5.14734 16.2167 5.3275 16.0838 5.46033C15.951 5.59317 15.7708 5.6678 15.583 5.6678H0.708318C0.52046 5.6678 0.340297 5.59317 0.207462 5.46033C0.0746263 5.3275 0 5.14734 0 4.95948Z" fill="white" />
                    </svg>
                </button>
                <a class="reg_reg_btn" href="registration.php?action=1">Authorization</a>
            </div>
        </form>
    <?php
    }
    ?>

    <?php
    if ($_GET['action'] == 4) { //РЕДАКТИРОВАНИЕ
    ?>
        <form class="reg_block_left" action="server.php?del=1" method="POST" enctype="multipart/form-data">
            <img class="foot_img_middle" src="faces_users/<?= $_SESSION['user_photo'] ?>" alt="photo">
            <input type="hidden" name="updater" value="1">
            <input class="reg_inp" name="first_name" type="text" value="<?= $_SESSION['first_name'] ?>" required placeholder="<?= $_SESSION['first_name'] ?>">
            <input class="reg_inp" name="second_name" type="text" value="<?= $_SESSION['second_name'] ?>" required placeholder="<?= $_SESSION['second_name'] ?>">
            <input class="reg_inp" name="age" type="number" value="<?= $_SESSION['age'] ?>" required placeholder="<?= $_SESSION['age'] ?>">
            <input class="reg_inp" name="phone" type="tel" value="<?= $_SESSION['phone'] ?>" required placeholder="<?= $_SESSION['phone'] ?>">
            <p class="reg_inp">Gender: <?= $_SESSION['gend'] == "m" ? "Male" : "Female" ?></p>
            <div class="gender_box">
                <input class="reg_radio" name="gend" value="m" type="radio" required name="gender">
                <p class="gender">Male</p>
                <input class="reg_radio" name="gend" value="f" type="radio" required name="gender">
                <p class="gender">Female</p>
            </div>
            <p class="reg_tittle_name">Login details</p>
            <input name="email" type="hidden" value="<?= $_SESSION['email'] ?>" required>
            <p class="reg_inp"><?= $_SESSION['email'] ?></p>
            <input class="reg_inp" name="passw" type="password" required placeholder="Enter your password">
            <input class="reg_inp" type="file" name="photo_user" accept="image/*">
            <p class="instr">Please use 8 or more characters, with at least 1 number and a mixture of uppercase and
                lowercase letters</p>
            <div class="button_box"> <button class="reg_gend_btn" type="submit">
                    EDIT NOW
                    <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.54 0.208095C11.6058 0.142131 11.684 0.0897967 11.77 0.0540883C11.8561 0.01838 11.9483 0 12.0415 0C12.1347 0 12.2269 0.01838 12.313 0.0540883C12.399 0.0897967 12.4772 0.142131 12.543 0.208095L16.7929 4.458C16.8589 4.5238 16.9112 4.60196 16.9469 4.68802C16.9826 4.77407 17.001 4.86632 17.001 4.95949C17.001 5.05266 16.9826 5.14491 16.9469 5.23097C16.9112 5.31702 16.8589 5.39518 16.7929 5.46098L12.543 9.71089C12.41 9.84389 12.2296 9.91861 12.0415 9.91861C11.8534 9.91861 11.673 9.84389 11.54 9.71089C11.407 9.57788 11.3323 9.39749 11.3323 9.2094C11.3323 9.0213 11.407 8.84091 11.54 8.70791L15.2898 4.95949L11.54 1.21107C11.474 1.14528 11.4217 1.06711 11.386 0.981059C11.3503 0.895005 11.3319 0.802752 11.3319 0.709584C11.3319 0.616415 11.3503 0.524162 11.386 0.438109C11.4217 0.352055 11.474 0.273891 11.54 0.208095Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 4.95948C0 4.77162 0.0746263 4.59146 0.207462 4.45862C0.340297 4.32579 0.52046 4.25116 0.708318 4.25116H15.583C15.7708 4.25116 15.951 4.32579 16.0838 4.45862C16.2167 4.59146 16.2913 4.77162 16.2913 4.95948C16.2913 5.14734 16.2167 5.3275 16.0838 5.46033C15.951 5.59317 15.7708 5.6678 15.583 5.6678H0.708318C0.52046 5.6678 0.340297 5.59317 0.207462 5.46033C0.0746263 5.3275 0 5.14734 0 4.95948Z" fill="white" />
                    </svg>
                </button>
                <a class="reg_reg_btn" href="server.php?del=1">EXIT</a>
            </div>
        </form>
    <?php
    }
    ?>

    <script src="close.js"></script>
</body>

</html>