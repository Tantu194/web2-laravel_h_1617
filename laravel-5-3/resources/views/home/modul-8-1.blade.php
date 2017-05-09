<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300%3Alatin%7CLibre+Baskerville%3Anormal%2Cbold%3A%7CVarela+Round%3Anormal%2Cbold%3A%7CHandlee%3Anormal%2Cbold%3A%7CKaushan+Script%3A400%3Alatin">
        <title>Coffee Shop &#8211; Délicious</title>
        <link href="css/module-8-1-css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div class="module-8-1">
            <div class="container">
                <div class="module-8-main">
                    <div class="row">
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Breakfast
                                </h2>
                                <?php foreach ($itemsBreak as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>    
                                <h2>
                                    Bruch
                                </h2>
                                <?php foreach ($itemsBruch   as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Dinner
                                </h2>
                                <?php foreach ($itemsDinner as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?> 
                                <h2>
                                    Lunch
                                </h2>
                                <?php foreach ($itemsLunch as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                        <div class="grid-1 col-md-4 col-sm-12 col-xm-12">
                            <div class="foodpress_menu">
                                <h2>
                                    Dessert
                                </h2>
                                <?php foreach ($itemsDessert as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?> 
                                <h2>
                                    Drinks
                                </h2>
                                <?php foreach ($itemsDrinks as $item): ?> 
                                    <div class="fp_container">
                                        <div class="food_items_container">
                                            <div  class="fp_box">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $item->coffee_name ?>
                                                        <span class="fp_price"><?php echo $item->coffee_price ?></span>
                                                    </h3>
                                                    <div class="menu_description">
                                                        <?php echo $item->coffee_description ?>
                                                        <a class="fp_inline_btn"> Read More</a>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>