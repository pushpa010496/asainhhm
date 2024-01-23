<?php

namespace App\Http\Controllers;

use Request;
use \DB;

use App\Models\Page;
use App\Models\Editorialarticle;
use App\Models\Category;
use App\Models\Article;
use App\Models\Interview;
use App\Models\TechnoTrend;
use App\Models\Project;
use App\Models\IndustryReport;
use App\Models\ReaserchInsites;
use App\Models\BookShelf;
use App\Models\CaseStudy;
use App\Models\WhitePaper;
use App\Models\News;
use App\Models\Pressrelease;
use App\Models\Event;
use App\Models\Webinar;

class SitemapController extends Controller
{
	
    public function index(){          
       
         return response()->view('sitemaps.index')->header('Content-Type', 'text/xml');
    }
   
      public function mainpages(){
      return response()->view('sitemaps.mainpages')->header('Content-Type','text/xml');
      }
    public function healthcaremanagement(){
      $healthcaremanagement=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','1')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.healthcare-management', compact('healthcaremanagement'))->header('Content-Type', 'text/xml');
    }

    public function medicalsciences(){
      $medicalsciences=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','2')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.medical-sciences', compact('medicalsciences'))->header('Content-Type', 'text/xml');
    }
    public function surgicalspeciality(){
      $surgicalspeciality=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','3')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.surgical-speciality', compact('surgicalspeciality'))->header('Content-Type', 'text/xml');
    }

    public function diagnostics(){
      $diagnostics=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','4')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.diagnostics', compact('diagnostics'))->header('Content-Type', 'text/xml');
    }
    public function informationtechnology(){
      $informationtechnology=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','7')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.information-technology', compact('informationtechnology'))->header('Content-Type', 'text/xml');
    }

    public function technologyequipment(){
      $technologyequipment=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','5')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.technology-equipment', compact('technologyequipment'))->header('Content-Type', 'text/xml');
    }
    public function facilitiesoperations(){
      $facilitiesoperations=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','6')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.facilities-operations', compact('facilitiesoperations'))->header('Content-Type', 'text/xml');
    }
    public function advertorials(){
      $advertorials=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','9')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.advertorials', compact('advertorials'))->header('Content-Type', 'text/xml');
    }

    public function foreword(){
      $foreword=Editorialarticle::with('category')->where('active_flag',1)->where('category_id','8')->orderBy('id', 'desc')->distinct()->get();
         return response()->view('sitemaps.foreword', compact('foreword'))->header('Content-Type', 'text/xml');
    }

    public function articles(){
      $articles = Article::where('active_flag',1)->where('back_link','!=0')->orderBy('id','desc')->get();	
         return response()->view('sitemaps.articles', compact('articles'))->header('Content-Type', 'text/xml');
    }

    public function interviews(){
      $interviews = Interview::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.interviews', compact('interviews'))->header('Content-Type', 'text/xml');
    }

    public function technotrends(){
      $technotrends = TechnoTrend::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.technotrends', compact('technotrends'))->header('Content-Type', 'text/xml');
    }

    public function projects(){
      $projects = Project::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.projects', compact('projects'))->header('Content-Type', 'text/xml');
    }

    public function healthcarereports(){
      $healthcarereports = IndustryReport::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.healthcare-reports', compact('healthcarereports'))->header('Content-Type', 'text/xml');
    }

    public function researchinsights(){
      $researchinsights = ReaserchInsites::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.researchinsights', compact('researchinsights'))->header('Content-Type', 'text/xml');
    }
    public function bookshelf(){
      $bookshelf = BookShelf::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.bookshelf', compact('bookshelf'))->header('Content-Type', 'text/xml');
    }

    public function casestudies(){
      $casestudies = CaseStudy::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.casestudies', compact('casestudies'))->header('Content-Type', 'text/xml');
    }
    public function whitepapers(){
      $whitepapers = WhitePaper::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.whitepapers', compact('whitepapers'))->header('Content-Type', 'text/xml');
    }
    public function news(){
      $news = News::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.news', compact('news'))->header('Content-Type', 'text/xml');
    }
    public function pressreleases(){
      $pressreleases = Pressrelease::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.pressreleases', compact('pressreleases'))->header('Content-Type', 'text/xml');
    }
    public function events(){
      $events = Event::where('active_flag',1)->orderBy('id','desc')->get();		
         return response()->view('sitemaps.events', compact('events'))->header('Content-Type', 'text/xml');
    }
    public function webinars(){
      $webinars = Webinar::orderBy('id','desc')->get();		
     
         return response()->view('sitemaps.webinars', compact('webinars'))->header('Content-Type', 'text/xml');
    }
}
