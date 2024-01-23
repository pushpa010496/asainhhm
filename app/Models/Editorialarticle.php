<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Editorialarticle extends Model implements Searchable
{
	protected $table = 'editorial_articles';
 

    public function issue(){
    	return $this->belongsTo(Issue::class,'issue_id')->where('active_flag',1);
    }
    public function category(){
    	return $this->belongsTo(Category::class,'category_id')->where('active_flag',1);
    }
    public function author(){
    	return $this->belongsTo(Contributors::class,'author_id')->where('active_flag',1);
    }

    public function authors(){
        return $this->belongsToMany('App\Models\Contributors')->withTimestamps();
    }
    
      public function getSearchResult(): SearchResult
        {
           
          $category=  Category::find($this->category_id);
        
            $url = url($category->url, $this->url);
          
             $description=$this->description;
            return new SearchResult(
                $this,
                $this->title,
                $url,
                $description
             );
        }
}
