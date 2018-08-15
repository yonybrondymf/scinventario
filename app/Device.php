<?php namespace Scinventario;

use Illuminate\Database\Eloquent\Model;

class Device extends Model {

	protected $table = 'devices';
	

	protected $fillable = array('code', 'category_id','description', 'brand', 'model', 'serial','dimension','color','cost','entry','document','state','location_id','made','owner','condition','observation','user_id');

	public function category(){
    	return $this->belongsTo('Scinventario\Category');
    }

    public function location(){
        return $this->belongsTo('Scinventario\Location');
    }

    public function user(){
    	return $this->belongsTo('Scinventario\User');
    }

	public function scopeName($query, $name)
	{
	  	if (trim($name) !="") {
	  		$query->where("description","LIKE","%$name%")
	  			->orwhere("brand","LIKE","%$name%")
                ->orwhere("model","LIKE","$name%")
                ->orwhere("document","LIKE","$name%")
                ->orwhere("state","LIKE","$name%");
	  	}
	  	
	}
	 public function scopeCategory($query, $category)
     {
        if (trim($category) !="") {
            $query->where("category_id",$category);
        }
        
     }
     public function scopeLocation($query, $location)
     {
        if (trim($location) !="") {
            $query->where("location_id",$location);
        }
        
     }


	public static function filterAndPaginate($name, $category, $location)
    {
    	return Device::name($name)->category($category)->location($location)->paginate(10);
    }
    public static function filters($name, $category,$location)
    {
    	return Device::name($name)->category($category)->location($location)->get();
    }

}
