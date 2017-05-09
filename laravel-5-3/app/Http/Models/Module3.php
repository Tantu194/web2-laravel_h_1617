<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App;
use DB;

class Module3 extends Model {

    protected $table = 'coffee_section';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable = [
        "coffee_id",
        "coffee_title",
        "coffee_description",
        "coffee_image",
    ];
    protected $guarded = ["coffee_id"];

    public function getALLcoffee_section() {
        $coffee_section = self::orderby('coffee_id')->get();
        return $coffee_section;
    }

    public function getOnecoffee_section($coffee_id) {
        $coffee_section = self::where('coffee_id', $coffee_id)->first();
        return $coffee_section;
    }

}
