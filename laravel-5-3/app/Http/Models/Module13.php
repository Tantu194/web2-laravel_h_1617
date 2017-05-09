<?php
namespace App\Http\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use App; use DB;
class Module13 extends Model{
    protected $table = 'coffee_products';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    protected $fillable =[
        "coffee_id",
        "coffee_brand",
        "coffee_description",
        "coffee_image",
        "coffee_MoreDescription",
        "coffee_name",
        "coffee_OldPrice",
        "coffee_price",
        "coffee_category"
    ];
    protected $guarded = ["coffee_id"];
    
    public function getAllCoffee_products(){
        $coffee_products = self::orderby('coffee_id')->get();
        return $coffee_products;
    } 
}

