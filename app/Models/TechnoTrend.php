<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class TechnoTrend extends Model implements Searchable
{
   

   public function getSearchResult(): SearchResult
	    {
	        $url = url('technotrends', $this->url);
	         $description=$this->description;
	        return new SearchResult(
	            $this,
	            $this->title,
	            $url,
	            $description
	         );
	    }
}
