<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Module13;


class ShopController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $module13 = new Module13();
        $coffee_products = $module13->getAllCoffee_products();
              
        $data = array(
            'coffee_products' => $coffee_products
        );
        
        echo view('./shop/modul-0');
        echo view('./shop/modul-12');
        echo view('./shop/modul-13', $data);
        echo view('./shop/modul-11');
    }
}
