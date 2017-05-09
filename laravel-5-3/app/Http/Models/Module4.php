<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Module4 extends Model {

    protected $table = 'coffee_offers';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable = [
        "coffee_id",
        "coffee_title",
        "coffee_description",
        "coffee_image",
    ];
    protected $guarded = ["coffee_id"];

    public function getALLcoffee_offers() {
        $coffee_offers = self::orderby('coffee_id')->get();
        return $coffee_offers;
    }
}
