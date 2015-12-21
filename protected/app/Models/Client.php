<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class client extends Sximo  {
	
	protected $table = 'client';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT client.* FROM client  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE client.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
