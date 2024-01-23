<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class BookShelf extends Model implements Searchable
{
    protected $table='book_shelfs';


    public function getSearchResult(): SearchResult
    {
    	$url = route('bookshelf.url', $this->url);
    	$description=$this->description;
    	return new SearchResult(
    		$this,
    		$this->title,
    		$url,
    		$description
    	);
    }
}
