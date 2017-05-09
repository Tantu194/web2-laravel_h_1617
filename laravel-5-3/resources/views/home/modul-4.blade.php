<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/https://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C600%2C700%2C400%2C300%3Alatin%7CLibre+Baskerville%3Anormal%2Cbold%3A%7CVarela+Round%3Anormal%2Cbold%3A%7CHandlee%3Anormal%2Cbold%3A%7CKaushan+Script%3A400%3Alatin') }}" rel="stylesheet">
        <link href="{{ asset('css/4.css') }}" rel="stylesheet">

    </head>

    <body>
        <div class="m4">
            <div class="module-4_1">
                <div class="container">
                    <div class="row">
                        <div class="lavender-grid">
                            <div class="menu-center">
                                <div class="sep-before"> 
                                    <div class="sep-line"></div>
                                </div>
                                <div class="content">
                                    <h2 class="text-divider-double">
                                        We offer
                                    </h2>
                                    <div class="text-divider-subtitle">Today Specials</div>
                                </div>
                                <div class="sep-after">
                                    <div class="sep-line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="m4_2">
                <div class="row">
                    <?php foreach ($coffee_offers as $item): ?>
                        <div class="m4-services col-xs-12">
                            <div class="m4-limit">

                                <div class="m4-limit-thumbnail">
                                    <a href="/" title="Coffee &amp; Tea" class="has-border">
                                        <img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($item['coffee_image']) ?>" class="attachment-full size-full"> </a>
                                </div>
                                <h4 class="m4-limit-services-title">
                                    <a href="/" title="Coffee &amp; Tea"><?php echo $item['coffee_title'] ?></a>
                                </h4>
                                <div class="m4-services-content">
                                    <p><?php echo $item['coffee_description'] ?></p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script> 
        <script src="{{ asset('/js/modul-4-js.js') }}"></script>
    </body>
</html>