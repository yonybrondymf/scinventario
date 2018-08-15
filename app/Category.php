<?php namespace Scinventario;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table = 'categories';
	
	protected $fillable = array('name');

	 public function devices(){
    	return $this->hasMany('Scinventario\Device');
    }

	public function scopeName($query, $name)
	  {
	  	if (trim($name) !="") {
	  		$query->where("name","LIKE","%$name%");
	  	}
	  	
	  }

}
