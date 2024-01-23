<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Article extends Model implements Searchable
{
	
	// public function author()
	// {
	// 	return $this->belongsTo('App\ModelsContributors','author_id');
	// }
	public function authors(){
		return $this->belongsToMany('App\Models\Contributors')->withTimestamps();
	}
    
	public function getSearchResult(): SearchResult
	    {
	        $url = route('articles.url', $this->url);
	         $description=$this->abstract;
	        return new SearchResult(
	            $this,
	            $this->title,
	            $url,
	            $description
	         );
	    }
}