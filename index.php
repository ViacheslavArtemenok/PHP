<?php
session_start();
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
    <header>
        <?php include "header.php"; ?>
    </header>

    <div class="back">
        <div class="wrap_promo">
            <img class="img_promo" src="img/man.png" alt="promo">
            <div class="promo_tittle">
                <h1 class="promo_h1">THE BRAND</h1>
                <h3 class="promo_h3">OF LUXERIOUS <span class="pink">FASHION</span></h3>
            </div>
        </div>
    </div>
    <div class="wrap">
        <div class="block_items">
            <a class="item_box" href="catalog.php?type=2">
                <img class="img_item" src="img/w.jpg" alt="w">
                <div class="item_text">
                    <h3 class="item_h3">30% OFF</h3>
                    <h1 class="item_h1">FOR WOMEN</h1>
                </div>
            </a>
            <a class="item_box" href="catalog.php?type=1">
                <img class="img_item" src="img/m.jpg" alt="m">
                <div class="item_text">
                    <h3 class="item_h3">HOT DEAL</h3>
                    <h1 class="item_h1">FOR MEN</h1>
                </div>
            </a>
            <a class="item_box" href="catalog.php?type=3">
                <img class="img_item" src="img/k.jpg" alt="k">
                <div class="item_text">
                    <h3 class="item_h3">NEW ARRIVALS</h3>
                    <h1 class="item_h1">FOR KIDS</h1>
                </div>
            </a>
        </div>

        <div class="item_box_long">
            <div class="item_long">
                <h3 class="item_h3">LUXIROUS & TRENDY</h3>
                <h1 class="item_h1">ACCESORIES</h1>
            </div>
        </div>

    </div>
    <div class="tittle_product">
        <h1 class="tittle_product_h1">Fetured Items</h1>
        <h3 class="tittle_product_h3">Shop for items based on what we featured in this week</h3>
    </div>
    <div class="wrap_product">
        <?php
        include "config.php";
        $get_gender = rand(1, 3);
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
        $file = file_get_contents("data_" . $get_gender . ".json");
        $taskList = json_decode($file, true);
        while ($data = mysqli_fetch_assoc($res)) {
            if ($data['id'] != 3 &&  $data['id'] != 6 && $data['id'] != 7) { ?>
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

    </div>
    <div class="box_btn">
        <a class="btn" href="catalog.php?type=<?= $get_gender ?>">Browse All Product</a>
    </div>

    <footer>
        <div class="footer_up">
            <div class="wrap_foot">
                <div class="foot_item">
                    <img class="foot_img" src="img/truck.svg" alt="truck">
                    <h3 class="foot_h3">Free Delivery</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
                <div class="foot_item">
                    <img class="foot_img" src="img/percent.svg" alt="percent">
                    <h3 class="foot_h3">Sales & discounts</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
                <div class="foot_item">
                    <img class="foot_img" src="img/crown.svg" alt="crown">
                    <h3 class="foot_h3">Quality assurance</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </footer>
    <script src="close.js"></script>
</body>

</html>