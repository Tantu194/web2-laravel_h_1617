<?php 
 
namespace App\Http\Models; 
 
use Illuminate\Database\Eloquent\Model; 
use App; 
use DB; 


class Module8 extends Model{
    protected $table = 'coffee_menu';
    protected $primaryKey = 'coffee_id';
    public $timestamps = false;
    
    protected $fillable =[
        "coffee_name",
        "coffe_description",
        "coffe_price",
        "coffe_status"
    ];
    protected $guarded = ["coffe_id"];
    
    public function getAllItem(){
        $items = self::orderby('coffee_id')->get();
        
        return $items;
    }
    
    public function getItemBreakfast($coffee_status){
        $items = self::where('coffee_status',$coffee_status)->get();
        return $items;
    }
}
