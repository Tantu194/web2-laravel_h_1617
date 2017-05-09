<!DOCTYPE html>
<html lang="en">
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/modul-7-css.css') }}" rel="stylesheet">

        <script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script> 
        <script src="{{ asset('/js/m7-jquery.js') }}"></script>

    </head>
    <body>
        <div class="m7">
            <div class="modul-7">

                <div class="row m7-tabs-all">
                    <ul class="nav nav-tabs">
                        <li class="active btnAll"><a href="#all" data-toggle="tab">All<span>8</span></a></li>
                        <li class="btnCoffee"><a  href="#coffee" data-toggle="tab">Coffee Shop<span>4</span></a></li>
                        <li class="btnGourmet"><a  href="#gourmet" data-toggle="tab">Gourmet<span>3</span></a></li>
                        <li class="btnRecipes"><a  href="#recipes" data-toggle="tab">Recipes<span>4</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="all">
                            <?php foreach ($coffee_portfolios as $item): ?>
                                <?php if ($item['coffee_name'] == "ALL"): ?>
                                    <div class="col-md-3 col-sm-6 col-xs-6 tab-content-pic">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>" >
                                        <span>
                                            <h3>
                                                <a><?php echo $item['coffee_title'] ?></a>
                                            </h3>
                                        </span>
                                    </div>

                                <?php endif;
                            endforeach;
                            ?>
                        </div>
                        <div class="tab-pane" id="coffee">
                            <?php foreach ($coffee_portfolios as $item): ?>
    <?php if ($item['coffee_name'] == "COFFEE SHOP"): ?>
                                    <div class="col-md-3 tab-content-pic">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>" >
                                        <span>
                                            <h3>
                                                <a><?php echo $item['coffee_title'] ?></a>
                                            </h3>
                                        </span>
                                    </div>

    <?php endif;
endforeach; ?>
                        </div>
                        <div class="tab-pane" id="gourmet">
<?php foreach ($coffee_portfolios as $item): ?>
    <?php if ($item['coffee_name'] == "GOURMET"): ?>
                                    <div class="col-md-3 tab-content-pic">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>" >
                                        <span>
                                            <h3>
                                                <a><?php echo $item['coffee_title'] ?></a>
                                            </h3>
                                        </span>
                                    </div>

                                <?php endif;
                            endforeach; ?>
                        </div>
                        <div class="tab-pane" id="recipes">
<?php foreach ($coffee_portfolios as $item): ?>
    <?php if ($item['coffee_name'] == "RECIPES"): ?>
                                    <div class="col-md-3 tab-content-pic">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>" >
                                        <span>
                                            <h3>
                                                <a><?php echo $item['coffee_title'] ?></a>
                                            </h3>
                                        </span>
                                    </div>

    <?php endif;
endforeach; ?>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="{{ asset('/js/modul-7-js.js') }}"></script>
    </body>
</html>