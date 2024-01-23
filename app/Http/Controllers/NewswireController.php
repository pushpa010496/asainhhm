<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Xmlpharse;
use SEOMeta;
use OpenGraph;
use Twitter;
use SEO;
use App\Models\SeoPage;
use App\Models\Page;
use \DB;

class NewswireController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $banners;
    public function index()
    {


         $banners = $this->banners;
       $newswires=Xmlpharse::take(10)->orderBy( 'pr_dt','desc')->get();
       
        $data_count = Xmlpharse::where('active_flag',1)->count();
        $this->seoTools(request()->segment(1)); 
        return view('newswires.index',compact('newswires','data_count','banners'));
    }

   
    public function show($news_url)
    {
        //
        $banners = $this->banners;
        $newswires = Xmlpharse::where('active_flag',1)->where('news_url',$news_url)->first();
        $this->seoToolsView($newswires->id); 
        return view('newswires.newswires_show',compact('newswires','banners'));
    }
    public function more($offset){
        
        $data = Xmlpharse::where('active_flag',1)->orderBy('pr_dt','desc') ->offset($offset)->limit(10)->get();
      
        return response(view('newswires.loadmore', compact('data'))->render());

    }


     public function filter($month,$year){

        $newswires = Xmlpharse::where('active_flag',1)->where('issuer','PR Newswire')->whereIn(DB::raw("Month(pr_dt)"), [$month])->whereIn(DB::raw("Year(pr_dt)"), [$year])->orderBy('pr_dt','desc')->get()->take(10);
        $data_count = $newswires->count(); 
        $banners = $this->banners;
       
        return view('newswires.filter',compact('newswires','banners','data_count','month','year'));   
    }

     public function viewnewswiresFilter($month,$year,$offset){
        $this->seoTools(request()->segment(1)); 
         $data =Xmlpharse::where('active_flag',1)->whereIn(DB::raw("Month(pr_dt)"), [$month])->whereIn(DB::raw("Year(pr_dt)"), [$year])->orderBy('pr_dt','desc')->offset($offset)->limit(10)->get(); 
        
         return response(view('newswires.loadmore', compact('data'))->render());   

    }

    
	public function seoTools($page){
        $page = Page::where('title',$page)->first();
      
        $data = SeoPage::where('page_id',$page->id)->first();        
        SEOMeta::setTitle($data->meta_title);
        SEOMeta::setDescription($data->meta_description);
        SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($data->meta_keywords);
        OpenGraph::setDescription($data->og_description);
        OpenGraph::setTitle($data->og_title);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $data->og_keywords);
        OpenGraph::addProperty('type', 'Project');
        OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        OpenGraph::addImage([$data->og_image, 'size' => 300]);

    }

     //seo for view
    public function seoToolsView($id){
    
    	$data = Xmlpharse::find($id);        
    	SEOMeta::setTitle($data->meta_title);
    	SEOMeta::setDescription($data->meta_description);
    	SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
    	SEOMeta::addKeyword($data->meta_keywords);
    	OpenGraph::setDescription($data->og_description);
    	OpenGraph::setTitle($data->og_title);
    	OpenGraph::setUrl(url()->current());
    	SEOMeta::setCanonical(url()->current());
    	OpenGraph::addProperty('keyword', $data->og_keywords);
    	OpenGraph::addProperty('type', 'Project');
    	OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
    	OpenGraph::addImage([$data->og_image, 'size' => 300]);

    }

}
