<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/modul-10-css.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="modul-10">
            <div class="row">
                <div class="m10-description">
                    <div class="m10-limit">
                        <div class="row row-all">
                            <div class="m10-description-main">
                                <div class="m10-description-all">
                                    <?php for($i = 0; $i < 4; $i++): $item = $coffee_news[$i] ?>
                                    <div class="col-md-3 m10-description-one col-sm-3">
                                        <div class="m10-description-one-pic">
                                            <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>">
                                        </div>
                                        <div class="m10-description-one-meta">
                                            <a href="#">Recipes</a>
                                            <a href="#">Tips & Tricks</a>
                                        </div>
                                        <div class="m10-description-one-title">
                                            <a href="#">
                                                <h4><?php echo $item['coffee_title'] ?></h4>
                                            </a>
                                            <p><?php echo $item['coffee_description'] ?></p>
                                            <div class="m10-description-one-tag">
                                                <a href="#">Bio</a>,
                                                <a href="#">Dinner</a>,
                                                <a href="#">Food</a>,
                                                <a href="#">Hand Made</a>,
                                                <a href="#">Lamb</a>,
                                                <a href="#">Recipe</a>,
                                                <a href="#">Tricks</a>
                                            </div>

                                            <div class="m10-description-one-category">
                                                <a href="#">
                                                    <span  class="cate-1">
                                                            <?php echo $item['coffee_creator'] ?>
                                                    </span></a>
                                                <a href="#">
                                                    <span class="cate-2">
                                                            <?php echo $item['coffee_timePost'] ?> 
                                                    </span>
                                                </a>
                                                <a href="#" class="cate-3">
                                                    <span class="fa fa-comment-o">
                                                            <?php echo $item['coffee_countComment'] ?>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <?php endfor; ?>
                                    
                                </div>

                            </div>
                            <div class="m10-button">
                                <p class="c1-btn">
                                    <a href="#">
                                        <span class="span-hover">Load more</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>