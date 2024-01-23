<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class ReaserchInsites extends Model implements Searchable
{
    protected $gaurded =['id'];

    public function getSearchResult(): SearchResult
    {
    	$url = url('researchinsights', $this->url);
    	$description=$this->description;
    	return new SearchResult(
    		$this,
    		$this->title,
    		$url,
    		$description
    	);
    }
}
