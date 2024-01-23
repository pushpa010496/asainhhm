<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\SearchAspect;
use App\Models\Editorialarticle;

class Contributors extends Model implements Searchable
{
    protected $guarded = ['id'];    

       public function editorials(){
    	return $this->belongsToMany(Editorialarticle::class);
    }


    public function getSearchResult(): SearchResult
    {

    	$article =  Contributors::with('editorials')->where('id', $this->id)->first();

    	if($article->editorials->count() == 0){

    		$category=  null;
    		$url = null;
    		$description = null;

    		return new SearchResult(
    			$article,
    			$article->title,
    			$url,
    			$description
    		);

    	}else{

    		$category=  Category::find($article->editorials->first()->category_id);


    		$url = url($category->url, $article->editorials->first()->url);


    		$description = $article->editorials->first()->description;

    		return new SearchResult(
    			$article->editorials->first(),
    			$article->editorials->first()->title,
    			$url,
    			$description
    		);
    	} 
    }

}
