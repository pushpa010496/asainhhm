<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Models\Product;

use App\Models\Company;

use App\Models\Form;

use Auth;

use Illuminate\Http\Request;

use \Session;

use \DB;

use \Mail;

use SEO;

use SEOMeta;

use OpenGraph;

use Twitter;

use App\Models\SeoPage;

use App\Models\TechnoTrend;

use App\Models\WhitePaper;

use App\Models\Interview;

use App\Models\News;

use App\Models\Article;

use App\Models\Pressrelease;

use App\Models\Event;

use App\Models\Project;

use App\Models\Editorialarticle;

use App\Models\Contributors;

use App\Models\ContributorSearch;

use App\Models\Category;

use App\Models\BookShelf;

use App\Models\ReaserchInsites;

use App\Models\IndustryReport;



use Spatie\Searchable\Search;

class SearchController extends Controller

{

 protected $model;

    public function __construct(Form $model)

    {

        $this->model = $model;

        //$this->middleware('auth');

    }

    public function index()

    {

    

         $products ="";

         

          $seo = SeoPage:: whereHas('seopages' , function($query) {

        $query->where('title',request()->segment(1));})->where('active_flag',1)->get();

        foreach ($seo as $value) {

            SEOMeta::setTitle($value->meta_title);

            SEOMeta::setDescription($value->meta_description);

            SEOMeta::addMeta('Project:published_time', $value->created_at->toW3CString(), 'property');

            SEOMeta::addKeyword($value->meta_keywords);

            OpenGraph::setDescription($value->og_description);

            OpenGraph::setTitle($value->og_title);

            OpenGraph::setUrl(url()->current());

            SEOMeta::setCanonical(url()->current());

            OpenGraph::addProperty('keyword', $value->og_keywords);

            OpenGraph::addProperty('type', 'Project');

            OpenGraph::addProperty('locale', 'en_GB');

           // OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);

            OpenGraph::addImage([$value->og_image, 'size' => 300]);

        } 

        

        return view('search/index',compact('products'));

    }  

  





    public function search(Request $request)
    {
        $string = $request->input('q');
        $searchValues = preg_split('/\s+/', $string, -1, PREG_SPLIT_NO_EMPTY); 
    
        $earticles = $this->searchEditorialArticle($searchValues);
        $authors = $this->searchAuthors($searchValues);
        $knowledgebank = $this->searchKkowledgeBank($searchValues);
        $industryupdates = $this->searchIndustryUpdates($searchValues);
    
        return view('search.searchlanding', compact('earticles', 'authors', 'knowledgebank', 'industryupdates'));
    } 
    
    public function searchEditorialArticle($searchValues)
    {
        $result = [];
    
        $data = Editorialarticle::where(function ($q) use ($searchValues) {
            foreach ($searchValues as $value) {          
                $q->orWhereRaw('lower(title) like ?', ["%{$value}%"]);
            }
        })->select('title', 'abstract', 'url', 'category_id')->take(50)->get();
    
        foreach ($data as $key => $article) {     
            $category = Category::find($article->category_id);
    
            $result[$key]['title'] = $article->title;
            $result[$key]['url'] = $category->url.'/'.$article->url;
            $result[$key]['description'] = $article->abstract;
        }
    
        return $result;
    }
    



    public function searchAuthors($searchValues)

    {

      $contributors =  Contributors::with('editorials')->where(function ($q) use ($searchValues) {

        foreach ($searchValues  as $value) {

          $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

        }

      })->take(50)->get();



      $result = [];

      $count = 0;

      foreach ($contributors as $articles) {

       

        foreach ($articles->editorials as $key => $value) {

          $cat = Category::find($value->category_id);          

          $result[$count]['title'] =  $value->title;

          $result[$count]['url'] =  $cat->url.'/'.$value->url;

          $result[$count]['description'] =  $value->abstract;

          $count++;

        }

        

      }

      return $result;

    }



    public function searchKkowledgeBank($searchValues)

    {



        $articles =  Article::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('articles/',url) as url"),'title',DB::raw("CONCAT(short_description) as description"))->take(50)->get();



        $interviews =  Interview::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }       

        })->select(DB::raw("CONCAT('interviews/',url) as url"),'title','description')->take(50)->get();



        $technotrend =  TechnoTrend::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('technotrends/',url) as url"),'title','description')->take(50)->get();



        $projects =  Project::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('projects/',url) as url"),'title','description')->take(50)->get();



        $bookS =  BookShelf::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('bookshelf/',url) as url"),'title','description')->take(50)->get();



        $whitepapers =  WhitePaper::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('whitepapers/',url) as url"),'title','description')->take(50)->get();





        $reaserchinsites =  ReaserchInsites::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('researchinsights/',url) as url"),'title','description')->take(50)->get();



        $industryreport =  IndustryReport::where('active_flag',1)->where(function ($q) use ($searchValues) {

          foreach ($searchValues  as $value) {          

            $q->orWhereRaw('lower(title1) like (?)',["%{$value}%"]);

          }

        })->select(DB::raw("CONCAT('healthcare-reports/',url) as url"),'title1','full_report')->take(50)->get();



        

      $result = collect($articles)->merge($interviews);

      $result = collect($result)->merge($technotrend);

      $result = collect($result)->merge($projects);

      $result = collect($result)->merge($bookS);

      $result = collect($result)->merge($whitepapers);

      $result = collect($result)->merge($reaserchinsites);

      $result = collect($result)->merge($industryreport);



      return $result;



    }





    public function searchIndustryUpdates($searchValues)

    {



      $news =  News::where('active_flag',1)->where(function ($q) use ($searchValues) {

        foreach ($searchValues  as $value) {          

          $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

        }

      })->select(DB::raw("CONCAT('news/',url) as url"),'title','description')->take(50)->get();



      $pressrelease =  Pressrelease::where('active_flag',1)->where(function ($q) use ($searchValues) {

        foreach ($searchValues  as $value) {          

          $q->orWhereRaw('lower(title) like (?)',["%{$value}%"]);

        }       

      })->select(DB::raw("CONCAT('pressreleases/',url) as url"),'title','description')->take(50)->get();

     

      $result = collect($news)->merge($pressrelease);

    

      return $result;



    }



   //  public function searchQuery($searchValues,$field,$getVal)

   //  {



   //   return Editorialarticle::where(function ($q) use ($searchValues,$field,$getVal) {

   //    foreach ($searchValues  as $value) {

   //      $q->orWhereRaw('lower('.$field.') like (?)',["%{$value}%"]);

   //    }

   //  })->select($getVal)->get();



   // }    







}