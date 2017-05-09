<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Module7 extends Model {

    protected $table = 'coffee_portfolios';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable = [
        "coffee_id",
        "coffee_title",
        "coffee_name",
        "coffee_image",
    ];
    protected $guarded = ["coffee_id"];

    public function getTabCoffee_portfolios($coffee_name){
        $Coffee_portfolios = self::where('coffee_name', $coffee_name)->get();
        return $Coffee_portfolios;
    }


    public function getALLCoffee_portfolios() {
        $Coffee_portfolios = self::orderby('coffee_id')->get();
        return $Coffee_portfolios;
    }
}
