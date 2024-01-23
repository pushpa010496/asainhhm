<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
class Interview extends Model implements Searchable
{
    protected $fillable = ['name', 'display_name', 'description'];

    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
    public function getSearchResult(): SearchResult
	    {
	        $url = route('interviews.url', $this->url);
	         $description=$this->description;
	        return new SearchResult(
	            $this,
	            $this->title,
	            $url,
	            $description
	         );
	    }
}