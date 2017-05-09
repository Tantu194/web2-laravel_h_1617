<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    foreach ($coffee_products as $item) {
        if ($item['coffee_id'] == $id) {
            $product = $item;
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
        <link rel="stylesheet" href="{{ URL::asset('css/15.css') }}" />

    </head>

    <body>
        <div class="m15">
            <div class="Module-15">

                <div class="row">
                    <div class="col-md-6">
                        <div class="anh">
                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($product['coffee_image']) ?>">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="Module-15-summary">
                            <p class="price">
                                <span class="woocommerce-Price">
                                    <span class="woocommerce-Price-currencySymbol">£</span>
                                    <?php echo $product['coffee_price'] ?>
                                </span>
                            </p>
                            <div class="text">
                                <p><?php echo $product['coffee_description'] ?></p>
                            </div>
                            <form class="cart">
                                <div class="quantity">
                                    <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                </div>
                                <button type="submit" name="add-to-cart" value="12033" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="product_meta">
                                <span class="posted_in">Category: 
                                    <a href="#" rel="tag">Breakfast</a>
                                </span>
                                <span class="tagged_as">Tags: 
                                    <a href="#" rel="tag">bio</a>
                                    <a href="#" rel="tag">breakfast</a> 
                                    <a href="#" rel="tag">pancake</a>
                                </span>
                            </div>
                            <div class="icon">
                                <ul>
                                    <li class="fb">
                                        <a class="fa fa-facebook-square"></a>

                                    </li>
                                    <li class="tw">
                                        <a class="fa fa-twitter-square" aria-hidden="true"></a>
                                    </li>
                                    <li class="pin">
                                        <a class="fa fa-pinterest-square" aria-hidden="true"></a>
                                    </li>
                                    <li class="tum">
                                        <a class="fa fa-tumblr-square" aria-hidden="true"></a>
                                    </li>
                                    <li class="google">
                                        <a class="fa fa-google-plus" aria-hidden="true"></a>
                                    </li>

                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>