<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/modul-2-css.css') }}" rel="stylesheet">
       
    </head>
    <body>
        <div class="m2">
            <div class="m2-container">
                <div class="m2-grip">
                    <div class="m2-grip-paralax">
                        <div class="m2-grip-background"></div>
                    </div>
                    <div class="m2-grip-content">
                        <div class="m2-grip-content-1 col-md-4 col-sm-4">
                            <div class="m2-grip-content-1-left col-md-10">
                                <h4><?php echo $tool['coffee_title']?></h4>
                                <p><?php echo $tool['coffee_description']?></p>
                            </div>
                        </div>
                        <div class="m2-grip-content-2 col-md-4 col-sm-4">
                            <img src="img/coffee-img-1.png">
                            <h3><?php echo $welcome['coffee_title'] ?></h3>
                            <p><?php echo $welcome['coffee_description'] ?></p>
                        </div>
                        <div class="m2-grip-content-1 m2-grip-content-3 col-md-4 col-sm-4">
                            <div class="m2-grip-content-1-left col-md-10">
                                <h4><?php echo $food['coffee_title'] ?></h4>
                                <p><?php echo $food['coffee_description'] ?></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>    
    </body>
    <script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script> 
    <script src="{{ asset('/js/modul-2-js.js') }}"></script>
    
</html>
