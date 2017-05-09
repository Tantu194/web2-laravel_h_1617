<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Module2;
use App\Http\Models\Module3;
use App\Http\Models\Module4;
use App\Http\Models\Module7;
use App\Http\Models\Module8;
use App\Http\Models\Module10;

class HomeController extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function index() {
        $module2 = new Module2();
        $module4 = new Module4();
        $module7 = new Module7();
        $module10 = new Module10();
        $obj = new Module8();
        
        $welcome = $module2->getOnecoffee_section('welcome');
        $tool = $module2->getOnecoffee_section('tool');
        $food = $module2->getOnecoffee_section('food');
        $coffee_offers = $module4->getALLcoffee_offers();
        $Coffee_portfolios = $module7->getALLCoffee_portfolios();
        $coffee_news = $module10->getALLCoffee_news();
              
        $data = array(
            'welcome' => $welcome,
            'tool' => $tool,
            'food' => $food,
            'coffee_offers' => $coffee_offers,
            'coffee_portfolios' => $Coffee_portfolios,
            'coffee_news' => $coffee_news,
        );
        
        $items = $obj->getAllItem();
        $itemsBreak = $obj->getItemBreakfast('Breakfast');
        $itemsBruch = $obj->getItemBreakfast('Brunch');
        $itemsDinner = $obj->getItemBreakfast('Dinner');
        $itemsLunch = $obj->getItemBreakfast('Lunch');
        $itemsDessert = $obj->getItemBreakfast('Dessert');
        $itemsDrinks = $obj->getItemBreakfast('Drinks');
        $module8 = array(
            'items' => $items,
            'itemsBreak' => $itemsBreak ,
            'itemsBruch' => $itemsBruch ,
            'itemsDinner' => $itemsDinner,
            'itemsLunch' => $itemsLunch,
            'itemsDessert' => $itemsDessert,
            'itemsDrinks' => $itemsDrinks
        );
        echo view('./home/modul-0');
        echo view('./home/modul-1');
        echo view('./home/modul-2', $data);
        echo view('./home/modul-3');
        echo view('./home/modul-4', $data);
        echo view('./home/modul-5');
        echo view('./home/modul-6');
        echo view('./home/modul-7', $data);
        echo view('./home/modul-8');
        echo view('./home/modul-8-1', $module8);
        echo view('./home/modul-9');
        echo view('./home/modul-12');       
        echo view('./home/modul-10', $data);
        
    }
}
