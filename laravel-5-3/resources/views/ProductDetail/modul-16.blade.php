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
        <link rel="stylesheet" href="{{ URL::asset('css/modul-16-css.css') }}" />

        <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

        <script type="text/javascript" src="{{ URL::asset('js/m16-jquery.js') }}"></script>

    </head>
    <body>
        <div class="modul-16">
            <div class="row">
                <div class="tabspill">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                        Description</a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                        Addtional information</a>
                                </li>
                                <li>
                                    <a href="#tab_default_3" data-toggle="tab">
                                        Review(0)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">
                                    <h2>Description</h2>

                                    <p><?php echo $product['coffee_MoreDescription'] ?></p>

                                </div>
                                <div class="tab-pane" id="tab_default_2">
                                    <h2>Additional information</h2>
                                    <table class="tab2">
                                        <tr>
                                            <th>BRAND</th>
                                            <td>
                                                <p>
                                                    <a href="#"><?php echo $product['coffee_brand'] ?></a>
                                                </p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tab_default_3">
                                    <div class="tab3">
                                        <h2>Reviews</h2>
                                        <p>There are no reviews yet.</p>
                                        <p>Be the first to review “American Breakfast Pancakes” </p>
                                        <p>
                                            <span>Your email address will not be published. Required fields are marked *</span>
                                        </p>
                                        <p class="rating">
                                            <label>Your Rating</label><br>
                                            <a href="#">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                        </p>
                                        <p class="review">
                                            <label>Your Review</label><br>
                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                        </p>
                                        <p class="name">
                                            <label>Name *</label><br>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                        </p>
                                        <p class="email">
                                            <label>Email *</label><br>
                                            <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                        </p>
                                        <p class="submit-form">
                                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>