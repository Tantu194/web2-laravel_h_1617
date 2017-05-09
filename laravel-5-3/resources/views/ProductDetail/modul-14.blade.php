<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($coffee_products as $item) {
        if ($item['coffee_id'] == $id) {
            $name = $item['coffee_name'];
        }
    }
}
?>
<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/modul-14-css.css') }}" />

    </head>
    <body>
        <header>
            <!-----------------------NAVIGATOR------------------------------->
            <div class="m14-navi-boder">
                <div class="m14-navi">
                    <div class="m14-navi-logo">
                        <a href="#">Délicious</a>
                    </div>
                    <div class="m14-navi-menus toggle-transition">
                        <ul>
                            <li>
                                <a href="#">Homes</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">Gourmet</a></li>
                                    <li><a href="#">Coffee</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="#">About</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Guestbook</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Menu</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">Expressive</a></li>
                                    <li><a href="#">Handsome</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Reservation</a></li>
                            <li>
                                <a href="#">Gallery</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Coffee Shop</a></li>
                                    <li><a href="#">Sushi Bar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">Healthy Food</a></li>
                                    <li><a href="#">Recipes</a></li>
                                    <li><a href="#">Cooking</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Features</a>
                                <ul class="m14-navi-menus-subMenu">
                                    <li><a href="#">Why Buy?</a></li>
                                    <li><a href="#">Theme Options</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                    <li>
                                        <a>Blog post  ></a>
                                        <ul class="m14-navi-menus-subMenu-1">
                                            <li><a href="#">No Sidebar</a></li>
                                            <li><a href="#">Left Sidebar</a></li>
                                            <li><a href="#">Right Sidebar</a></li>
                                            <li><a href="#">Left &amp; Right Sidebar</a></li>
                                            <li><a href="#">Top Widgets</a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="#">Icons</a></li>
                                </ul>
                            </li>
                            <li><a href="http://localhost/web2-laravel/laravel-5-3/public/shop">Shop</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                    <div class="m14-navi-icon">
                        <div class="m14-navi-icon-cart">
                            <a class="m14-navi-cart-icon" href="#">
                                <span class="icon"></span>
                                <span class="products cart-empty">0</span>
                            </a>
                            <div class="m14-widget_shopping_cart">
                                <ul class="m14-cart_list">
                                    <li class="empty">No products in the cart.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m14-navi-icon-search">
                            <button class="m14-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="m14-navi-icon-mobile-btn">
                            <i class="fa fa-reorder"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------SLIDE SHOW-------------------->
            <div class="m14-banner">

                <h1><?php echo $name ?></h1>
            </div>
        </header>
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/modul14-navi-js.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/m14-slide-js.js') }}"></script>
</html>