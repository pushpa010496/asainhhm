<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Event extends Model implements Searchable
{
  protected $guarded = ['id'];
    public function Author(){
      return $this->belongsTo('App\Models\User','author_id');
    }
    public function eventprofile()
	{
	   return $this->hasOne('App\Models\EventProfile','event_id');
	}
	public function eventorg()
    {
        return $this->belongsTo('App\Models\EventOrg','event_org_id');
    }
    public function eventseo(){
      return $this->hasMany('App\Models\SeoEvent');
    }
    public function eventspeaker(){
      return $this->hasMany('App\Models\EventSpeaker');
    }
    public function eventpartner(){
      return $this->hasMany('App\Models\EventPartner');
    }
    public function eventgallery(){
      return $this->hasMany('App\Models\EventGallery');
    }
      public function getSearchResult(): SearchResult
    {
        $url = route('events.url', $this->url);
        $description=$this->home_description;
        return new SearchResult(
            $this,
            $this->title,
            $url,
            $description
        );
    }
}