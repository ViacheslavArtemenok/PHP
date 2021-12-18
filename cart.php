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

    <article>
        <div class="main_tittle_box">
            <div class="main_tittle_mini">
                <h3 class="pink_tittle">SHOPPING CART</h3>
            </div>
        </div>
    </article>

    <div class="wrap_cart">
        <div class="cart_change">
            <?php include "render.php" ?>
            <div class="cart_btns">
                <form action="server.php" method="POST" enctype="multipart/form-data">
                    <input hidden name="del_all" type="text" value="1">
                    <button class="cart_btn" type="submit">CLEAR SHOPPING CART</button>
                </form>
                <a href="index.php" class="cart_btn">CONTINUE SHOPPING</a>
            </div>
        </div>
        <form class="cart_form_box" action="cart.html" method="POST" enctype="multipart/form-data">
            <div class="cart_form_box_left">
                <p class="cart_form_tittle">SHIPPING ADRESS</p>
                <input class="cart_form_input" required type="text" placeholder="USA">
                <input class="cart_form_input" required type="text" placeholder="State">
                <input class="cart_form_input" required type="text" placeholder="Postcode / Zip">
                <button class="cart_form_btn" type="submit">GET A QUOTE</button>
            </div>

            <div class="checkout_box">
                <div class="sub_total">
                    <p>SUB TOTAL</p>
                    <p>$<?= $total ?></p>
                </div>
                <div class="grand_total">
                    <p>GRAND TOTAL</p>
                    <p class="cart_price_pink">$<?= $total ?></p>
                </div>

                <svg class="checkout_line" width="275" height="1" viewBox="0 0 275 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M275 0H0V1H275V0Z" fill="#E2E2E2" />
                </svg>
                <a class="checkout_href" href="https://www.paypal.com/ru/home">PROCEED TO CHECKOUT</a>
            </div>
        </form>
    </div>

    <footer class="under">
        <?php include "footer.php" ?>
    </footer>
</body>

</html>