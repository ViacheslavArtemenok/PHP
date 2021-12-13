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
        <div class="header_up">
            <div class="wrap_head">
                <div class="logo_left">
                    <a class="logo_left_img logo_main" href="index.php"><img src="img/logo.svg" alt="logo"></a>
                    <details class="details_search">
                        <summary><svg class="logo_left_img" width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="logo_svg" d="M19.0596 17.6259C20.6713 15.8658 21.6282 13.6048 21.7698 11.2225C21.9113 8.84018 21.2288 6.48173 19.8369 4.54318C18.445 2.60463 16.4285 1.20404 14.126 0.576619C11.8234 -0.0508009 9.3751 0.13316 7.19217 1.09761C5.00923 2.06205 3.22463 3.74825 2.13804 5.87302C1.05145 7.9978 0.729054 10.4318 1.225 12.7661C1.72094 15.1005 3.00501 17.1932 4.86158 18.6927C6.71814 20.1922 9.03413 21.0072 11.4206 21.0009C13.673 21.004 15.8645 20.27 17.6606 18.9109L25.4086 26.7179C25.4941 26.807 25.5965 26.8781 25.7099 26.927C25.8232 26.9759 25.9452 27.0017 26.0686 27.0029C26.1923 27.0033 26.3148 26.9782 26.4283 26.9292C26.5419 26.8801 26.6441 26.8082 26.7286 26.7179C26.9025 26.537 26.9997 26.2958 26.9997 26.0449C26.9997 25.794 26.9025 25.5528 26.7286 25.3719L19.0596 17.6259ZM2.88662 10.5009C2.89946 8.81563 3.41094 7.17187 4.35659 5.77685C5.30224 4.38183 6.63972 3.29801 8.20044 2.662C9.76115 2.02599 11.4752 1.86627 13.1266 2.20298C14.7779 2.53969 16.2926 3.35775 17.4797 4.55404C18.6668 5.75033 19.4732 7.27129 19.7972 8.92519C20.1212 10.5791 19.9483 12.2919 19.3002 13.8476C18.6522 15.4034 17.5581 16.7325 16.1559 17.6674C14.7536 18.6023 13.1059 19.1011 11.4206 19.1009C9.14916 19.0901 6.97482 18.1784 5.37484 16.566C3.77486 14.9537 2.87998 12.7724 2.88662 10.5009Z" fill="#E8E8E8" />
                            </svg>
                        </summary>
                        <form class="area_search" action="product.html">
                            <input class="input_search" required type="text" placeholder="Enter Your Keyword">
                            <button class="btn_search" type="submit">Search</button>
                        </form>
                    </details>
                </div>
                <div class="logo_right">
                    <?= include "menu.php"; ?>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="main_tittle_box">
            <div class="main_tittle">
                <h3 class="pink_tittle">NEW ARRIVALS </h3>
                <div class="way">
                    <a class="way_text" href="index.php">HOME&nbsp;</a>
                    <a class="way_text" href="catalog_kids.php">KIDS&nbsp;</a>
                    <a class="way_text" href="catalog_kids.php">NEW ARRIVALS</a>
                </div>
            </div>
        </div>
        <div class="product_menu">
            <details class="filter_box">
                <summary class="filter_click">
                    <span class="filter_text">FILTER</span>
                    <svg class="filter_svg" width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="filter_svg" d="M0.833333 10H4.16667C4.625 10 5 9.625 5 9.16667C5 8.70833 4.625 8.33333 4.16667 8.33333H0.833333C0.375 8.33333 0 8.70833 0 9.16667C0 9.625 0.375 10 0.833333 10ZM0 0.833333C0 1.29167 0.375 1.66667 0.833333 1.66667H14.1667C14.625 1.66667 15 1.29167 15 0.833333C15 0.375 14.625 0 14.1667 0H0.833333C0.375 0 0 0.375 0 0.833333ZM0.833333 5.83333H9.16667C9.625 5.83333 10 5.45833 10 5C10 4.54167 9.625 4.16667 9.16667 4.16667H0.833333C0.375 4.16667 0 4.54167 0 5C0 5.45833 0.375 5.83333 0.833333 5.83333Z" fill="#EF5B70" />
                    </svg>
                </summary>
                <details class="categ_box">
                    <summary class="categ">
                        <span class="categ_text">CATEGORY</span>
                    </summary>
                    <a class="categ_item" href="#">Accessories</a>
                    <a class="categ_item" href="#">Bags</a>
                    <a class="categ_item" href="#">Denim</a>
                    <a class="categ_item" href="#">Hoodies & Sweatshirts</a>
                    <a class="categ_item" href="#">Jackets & Coats</a>
                    <a class="categ_item" href="#">Polos</a>
                    <a class="categ_item" href="#">Shirts</a>
                    <a class="categ_item" href="#">Shoes</a>
                    <a class="categ_item" href="#">Sweaters & Knits</a>
                    <a class="categ_item" href="#">T-Shirts</a>
                    <a class="categ_item" href="#">Tanks</a>
                </details>
                <details class="categ_box categ_box_margin">
                    <summary class="categ">
                        <span class="categ_text">BRAND</span>
                    </summary>
                    <a class="categ_item" href="#">Accessories</a>
                    <a class="categ_item" href="#">Bags</a>
                    <a class="categ_item" href="#">Denim</a>
                    <a class="categ_item" href="#">Hoodies & Sweatshirts</a>
                    <a class="categ_item" href="#">Jackets & Coats</a>
                    <a class="categ_item" href="#">Polos</a>
                    <a class="categ_item" href="#">Shirts</a>
                    <a class="categ_item" href="#">Shoes</a>
                    <a class="categ_item" href="#">Sweaters & Knits</a>
                    <a class="categ_item" href="#">T-Shirts</a>
                    <a class="categ_item" href="#">Tanks</a>
                </details>
                <details class="categ_box categ_box_margin">
                    <summary class="categ">
                        <span class="categ_text">DESIGNER</span>
                    </summary>
                    <a class="categ_item" href="#">Accessories</a>
                    <a class="categ_item" href="#">Bags</a>
                    <a class="categ_item" href="#">Denim</a>
                    <a class="categ_item" href="#">Hoodies & Sweatshirts</a>
                    <a class="categ_item" href="#">Jackets & Coats</a>
                    <a class="categ_item" href="#">Polos</a>
                    <a class="categ_item" href="#">Shirts</a>
                    <a class="categ_item" href="#">Shoes</a>
                    <a class="categ_item" href="#">Sweaters & Knits</a>
                    <a class="categ_item" href="#">T-Shirts</a>
                    <a class="categ_item" href="#">Tanks</a>
                </details>
            </details>

            <div class="product_menu_right">
                <details class="collection_select trending">
                    <summary>
                        TRENDING NOW
                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81723 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214Z" fill="#6F6E6E" />
                        </svg>
                    </summary>
                    <div class="input_box">
                        <label><input class="check_box" id="in_men" type="checkbox"> Men</label>
                        <label><input class="check_box" id="in_women" type="checkbox"> Women</label>
                        <label><input class="check_box" id="in_kids" type="checkbox"> Kids</label>
                    </div>
                </details>
                <details class="collection_select size">
                    <summary>
                        SIZE<svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81723 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214Z" fill="#6F6E6E" />
                        </svg>
                    </summary>
                    <div class="input_box">
                        <label><input class="check_box" id="in_xs" type="checkbox"> XS</label>
                        <label><input class="check_box" id="in_s" type="checkbox"> S</label>
                        <label><input class="check_box" id="in_m" type="checkbox"> M</label>
                        <label><input class="check_box" id="in_l" type="checkbox"> L</label>
                    </div>
                </details>
                <details class="collection_select price">
                    <summary>
                        PRICE<svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.00214 5.00214C4.83521 5.00247 4.67343 4.94433 4.54488 4.83782L0.258102 1.2655C0.112196 1.14422 0.0204417 0.969958 0.00302325 0.781035C-0.0143952 0.592112 0.0439493 0.404007 0.165221 0.258101C0.286493 0.112196 0.460759 0.0204417 0.649682 0.00302327C0.838605 -0.0143952 1.02671 0.043949 1.17262 0.165221L5.00214 3.36602L8.83167 0.279536C8.90475 0.220188 8.98884 0.175869 9.0791 0.149125C9.16937 0.122382 9.26403 0.113741 9.35764 0.1237C9.45126 0.133659 9.54198 0.162021 9.6246 0.207156C9.70722 0.252292 9.7801 0.313311 9.83906 0.386705C9.90449 0.460167 9.95405 0.546351 9.98462 0.639855C10.0152 0.733359 10.0261 0.83217 10.0167 0.930097C10.0073 1.02802 9.97784 1.12296 9.93005 1.20895C9.88227 1.29494 9.81723 1.37013 9.73904 1.42982L5.45225 4.88068C5.32002 4.97036 5.16154 5.01312 5.00214 5.00214Z" fill="#6F6E6E" />
                        </svg>
                    </summary>
                    <div class="input_box">
                        <label><input class="check_box" id="in_price_1" type="checkbox"> 1$-100$</label>
                        <label><input class="check_box" id="in_price_2" type="checkbox"> 100$-500$</label>
                        <label><input class="check_box" id="in_price_3" type="checkbox"> 500$-1000$</label>
                        <label><input class="check_box" id="in_price_4" type="checkbox"> 1000$.....</label>
                    </div>
                </details>
            </div>
        </div>
    </nav>

    <div class="wrap_product">
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k1.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="product.html">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k2.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k3.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k4.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k5.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k6.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k7.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k8.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="product.html">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
        <div class="product_item">
            <a href="cart.html">
                <div class="box_pict">
                    <img class="pict_img" src="img/product_k9.jpg" alt="product">
                    <div class="bord_add_to_cart">
                        <div class="add_to_cart">
                            <img class="add_to_cart_img" src="img/cart.svg" alt="cart">
                            <p class="add_to_cart_text">Add to Cart</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <h3 class="pd_tittle">ELLERY X M'O CAPSULE</h3>
                <p class="pd_text">Known for her sculptural takes on traditional tailoring, Australian arbiter of
                    cool
                    Kym Ellery teams up with Moda Operandi.</p>
                <p class="pd_price">$52.00</p>
            </a>
        </div>
    </div>
    <div class="pages">
        <a class="number_page" href="#">
            <svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.995 2L3.995 7L8.995 12L7.995 14L0.994995 7L7.995 0L8.995 2Z" fill="black" />
            </svg>
        </a>
        <a class="number_page_ch" href="#">1</a>
        <a class="number_page" href="#">2</a>
        <a class="number_page" href="#">3</a>
        <a class="number_page" href="#">4</a>
        <a class="number_page" href="#">5</a>
        <a class="number_page" href="#">6.....20</a>
        <a class="number_page" href="#"><svg width="9" height="14" viewBox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.994995 12L5.995 7L0.994995 2L1.995 0L8.995 7L1.995 14L0.994995 12Z" fill="black" />
            </svg>
        </a>
    </div>

    <footer>
        <div class="footer_up">
            <div class="wrap_foot">
                <div class="foot_item">
                    <img class="foot_img" src="img/truck.svg" alt="truck">
                    <h3 class="foot_h3 foot_h3_mrg1">Free Delivery</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
                <div class="foot_item">
                    <img class="foot_img" src="img/percent.svg" alt="percent">
                    <h3 class="foot_h3 foot_h3_mrg2">Sales & discounts</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
                <div class="foot_item">
                    <img class="foot_img" src="img/crown.svg" alt="crown">
                    <h3 class="foot_h3 foot_h3_mrg3">Quality assurance</h3>
                    <p class="foot_p">Worldwide delivery on all. Authorit tively morph next-generation innov tion with
                        extensive models.</p>
                </div>
            </div>
        </div>
        <div class="footer_middle">
            <div class="wrap_foot_middle">
                <div class="foot_item_middle">
                    <img class="foot_img_middle" src="img/face.png" alt="face">
                    <p class="foot_p_middle">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, <span class="f_italic">a
                            pulvinar purus
                            condimentum“</span></p>
                </div>
                <div class="foot_item_middle">
                    <h3 class="foot_h3_right">SUBSCRIBE</h3>
                    <p class="foot_p_right">FOR OUR NEWLETTER AND PROMOTION</p>
                    <form class="area" action="#">
                        <input class="input_foot" required type="email" placeholder="Enter Your Email">
                        <button class="btn_foot" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_lower">
            <div class="wrap_foot_lower">
                <p class="rights">&#169; 2021 Brand All Rights Reserved.</p>
                <div class="lower_mess">
                    <a class="mess_box pad_1" href="#">
                        <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="mess_img" d="M8.08836 8.28L8.50686 5.61602H5.89022V3.88729C5.89022 3.15847 6.25574 2.44806 7.42765 2.44806H8.61722V0.179975C8.61722 0.179975 7.53772 0 6.50561 0C4.35073 0 2.9422 1.27593 2.9422 3.5857V5.61602H0.546875V8.28H2.9422V14.72H5.89022V8.28H8.08836Z" fill="black" />
                        </svg>
                    </a>
                    <a class="mess_box pad_2" href="#">
                        <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="mess_img" d="M8.13897 3.68159C6.02383 3.68159 4.31774 5.38491 4.31774 7.49663C4.31774 9.60835 6.02383 11.3117 8.13897 11.3117C10.2541 11.3117 11.9602 9.60835 11.9602 7.49663C11.9602 5.38491 10.2541 3.68159 8.13897 3.68159ZM8.13897 9.9769C6.77211 9.9769 5.65467 8.8646 5.65467 7.49663C5.65467 6.12866 6.76878 5.01636 8.13897 5.01636C9.50915 5.01636 10.6233 6.12866 10.6233 7.49663C10.6233 8.8646 9.50583 9.9769 8.13897 9.9769ZM13.0078 3.52554C13.0078 4.02026 12.6087 4.41538 12.1165 4.41538C11.621 4.41538 11.2252 4.01694 11.2252 3.52554C11.2252 3.03413 11.6243 2.63569 12.1165 2.63569C12.6087 2.63569 13.0078 3.03413 13.0078 3.52554ZM15.5386 4.42866C15.4821 3.23667 15.2094 2.18081 14.3347 1.31089C13.4634 0.440967 12.4058 0.168701 11.2119 0.108936C9.9814 0.039209 6.29321 0.039209 5.0627 0.108936C3.8721 0.165381 2.81453 0.437646 1.93987 1.30757C1.06522 2.17749 0.795836 3.23335 0.735973 4.42534C0.666134 5.65386 0.666134 9.33608 0.735973 10.5646C0.79251 11.7566 1.06522 12.8124 1.93987 13.6824C2.81453 14.5523 3.86878 14.8246 5.0627 14.8843C6.29321 14.9541 9.9814 14.9541 11.2119 14.8843C12.4058 14.8279 13.4634 14.5556 14.3347 13.6824C15.2061 12.8124 15.4788 11.7566 15.5386 10.5646C15.6085 9.33608 15.6085 5.65718 15.5386 4.42866ZM13.949 11.8828C13.6895 12.5335 13.1874 13.0349 12.5322 13.2972C11.5511 13.6857 9.22314 13.596 8.13897 13.596C7.05479 13.596 4.72348 13.6824 3.74573 13.2972C3.09389 13.0382 2.59171 12.5369 2.32898 11.8828C1.93987 10.9033 2.02967 8.57905 2.02967 7.49663C2.02967 6.41421 1.9432 4.08667 2.32898 3.1105C2.58838 2.45972 3.09056 1.95835 3.74573 1.69604C4.7268 1.30757 7.05479 1.39722 8.13897 1.39722C9.22314 1.39722 11.5545 1.31089 12.5322 1.69604C13.184 1.95503 13.6862 2.4564 13.949 3.1105C14.3381 4.08999 14.2483 6.41421 14.2483 7.49663C14.2483 8.57905 14.3381 10.9066 13.949 11.8828Z" fill="black" />
                        </svg>
                    </a>
                    <a class="mess_box pad_3" href="#">
                        <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="mess_img" d="M6.74032 0.203125C3.55564 0.203125 0.408203 2.34063 0.408203 5.8C0.408203 8 1.63738 9.25 2.38233 9.25C2.68963 9.25 2.86655 8.3875 2.86655 8.14375C2.86655 7.85313 2.13091 7.23438 2.13091 6.025C2.13091 3.5125 4.03055 1.73125 6.4889 1.73125C8.60271 1.73125 10.1671 2.94062 10.1671 5.1625C10.1671 6.82187 9.50597 9.93437 7.36422 9.93437C6.59133 9.93437 5.93018 9.37187 5.93018 8.56563C5.93018 7.38438 6.74963 6.24062 6.74963 5.02187C6.74963 2.95312 3.835 3.32812 3.835 5.82812C3.835 6.35313 3.90018 6.93437 4.13298 7.4125C3.70463 9.26875 2.82931 12.0344 2.82931 13.9469C2.82931 14.5375 2.91311 15.1188 2.96899 15.7094C3.07452 15.8281 3.02175 15.8156 3.18316 15.7563C4.74757 13.6 4.69169 13.1781 5.3994 10.3562C5.78119 11.0875 6.76826 11.4812 7.55046 11.4812C10.8469 11.4812 12.3275 8.24688 12.3275 5.33125C12.3275 2.22813 9.66427 0.203125 6.74032 0.203125Z" fill="black" />
                        </svg>
                    </a>
                    <a class="mess_box pad_4" href="#">
                        <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="mess_img" d="M14.417 3.74052C14.427 3.88264 14.427 4.0248 14.427 4.16692C14.427 8.50192 11.1498 13.4969 5.15986 13.4969C3.31448 13.4969 1.60022 12.9588 0.158203 12.0248C0.420396 12.0552 0.67247 12.0654 0.944752 12.0654C2.46741 12.0654 3.8691 11.5476 4.98843 10.6644C3.5565 10.6339 2.3565 9.68977 1.94305 8.39027C2.14475 8.4207 2.34642 8.44102 2.5582 8.44102C2.85063 8.44102 3.14308 8.40039 3.41533 8.32936C1.92291 8.02477 0.803551 6.70498 0.803551 5.11108V5.07048C1.23715 5.31414 1.74139 5.46642 2.2758 5.4867C1.39849 4.89786 0.823727 3.8928 0.823727 2.75573C0.823727 2.14661 0.985041 1.58823 1.26741 1.10092C2.87077 3.09077 5.28086 4.39023 7.98334 4.53239C7.93293 4.28873 7.90266 4.03495 7.90266 3.78114C7.90266 1.97402 9.35477 0.501953 11.1598 0.501953C12.0976 0.501953 12.9446 0.897891 13.5396 1.53748C14.2757 1.39536 14.9816 1.12123 15.6068 0.745609C15.3648 1.50705 14.8505 2.14664 14.1749 2.5527C14.8304 2.48167 15.4657 2.29889 16.0505 2.04511C15.6069 2.69483 15.0522 3.27348 14.417 3.74052Z" fill="black" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>