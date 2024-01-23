<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Pressrelease extends Model implements Searchable
{
    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }

      public function getSearchResult(): SearchResult
    {
        $url = route('pressreleases.url', $this->url);
        $description=$this->description;
        return new SearchResult(
            $this,
            $this->title,
            $url,
            $description
        );
    }
}