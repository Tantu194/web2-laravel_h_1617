<!DOCTYPE html>
<html lang="en">
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/modul-13-css.css') }}" />
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/m13-jquery.js') }}"></script>

    </head>
    <body>
        <div class="modul-7">

            <div class="row m7-tabs-all">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                    <li><a href="#salads" data-toggle="tab">Salads</a></li>
                    <li><a href="#soups" data-toggle="tab">Soups</a></li>
                    <li><a href="#main" data-toggle="tab">Main</a></li>
                    <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                    <li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                    <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                    <li><a href="#accessories" data-toggle="tab">Accessories</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="all">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
                                    <?php foreach ($coffee_products as $item): ?>
                                        <div class="col-md-3 col-sm-3 col-xs-12">
                                            <div class="product">
                                                <a href="#"></a>
                                                <div class="productimg">
                                                    <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                </div>
                                                <div class="addtocart">
                                                    <a href="#">Add to Cart</a>
                                                </div>
                                                <h5><?php echo $item['coffee_brand'] ?></h5>
                                                <span class="tagged">
                                                    <a href="#">BIO</a>
                                                    <a href="#">BREAKFAST</a>
                                                    <a href="#">GOURMET</a>
                                                    <a href="#">SWEET</a>
                                                </span>
                                                <?php $name = $item['coffee_name'] ?>
                                                <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                    <h3><?php echo $item['coffee_name'] ?></h3> 
                                                </a>
                                                <span class="old-price">
                                                    <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                </span>
                                                <span class="new-price">
                                                    <p>£<?php echo $item['coffee_price'] ?></p>
                                                </span>
                                            </div>     
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="salads">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
                                    <?php foreach ($coffee_products as $item): ?>
                                        <?php if ($item['coffee_category'] == "1"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
                                                    <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
                                        <?php endif;
                                    endforeach;
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="soups">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
                                    <?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "2"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
                                        <?php endif;
                                    endforeach;
                                    ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="main">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
<?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "3"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
    <?php endif;
endforeach;
?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="desserts">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
<?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "4"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
    <?php endif;
endforeach;
?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="breakfast">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
<?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "5"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
    <?php endif;
endforeach;
?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="drinks">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
<?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "6"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
    <?php endif;
endforeach;
?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="accessories">
                        <div class="module-18">
                            <div class="row">
                                <div class="limit-wapper">
<?php foreach ($coffee_products as $item): ?>
    <?php if ($item['coffee_category'] == "7"): ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <div class="product">
                                                    <a href="#"></a>
                                                    <div class="productimg">
                                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item['coffee_image']) ?>" alt=""/>
                                                    </div>
                                                    <div class="addtocart">
                                                        <a href="#">Add to Cart</a>
                                                    </div>
                                                    <h5><?php echo $item['coffee_brand'] ?></h5>
                                                    <span class="tagged">
                                                        <a href="#">BIO</a>
                                                        <a href="#">BREAKFAST</a>
                                                        <a href="#">GOURMET</a>
                                                        <a href="#">SWEET</a>
                                                    </span>
        <?php $name = $item['coffee_name'] ?>
                                                    <a href="http://localhost/web2-laravel/laravel-5-3/public/product/{{$name}}?id=<?php echo $item['coffee_id'] ?>">
                                                        <h3><?php echo $item['coffee_name'] ?></h3> 
                                                    </a>
                                                    <span class="old-price">
                                                        <p><?php echo $item['coffee_OldPrice'] ?></p>
                                                    </span>
                                                    <span class="new-price">
                                                        <p>£<?php echo $item['coffee_price'] ?></p>
                                                    </span>
                                                </div>     
                                            </div>
    <?php endif;
endforeach;
?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>