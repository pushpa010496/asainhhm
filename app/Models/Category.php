<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\subCategory;

use DB;

class Category extends Model
{
		

    protected $parent = 'parent_id';

    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
 
  	public function issues()
	{	    return $this->belongsToMany('App\Models\Issue')
	      ->withTimestamps();
	}
	
	
}