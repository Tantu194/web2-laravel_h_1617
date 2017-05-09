<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Module10 extends Model {

    protected $table = 'coffee_news';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable = [
        "coffee_id",
        "coffee_description",
        "coffee_news",
        "coffee_image",
        "coffee_creator",
        "coffee_timePost",
        "coffee_countComment"
    ];
    protected $guarded = ["coffee_id"];

    public function getALLCoffee_news() {
        $Coffee_portfolios = self::orderby('coffee_id')->get();
        return $Coffee_portfolios;
    }
}
