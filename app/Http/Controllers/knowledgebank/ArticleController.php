<?php

namespace App\Http\Controllers\knowledgebank;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\SeoPage;
use App\Models\Page;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use Intervention\Image\Facades\Image;


class ArticleController extends HomeController
{
   public function index()
	{	
				
		$data = Article::where('active_flag',1)->orderBy('id','desc')->select('url','title','sub_title','short_description','title_tag')->get()->take(10);		
		$banners = $this->banners;
		$data_count = Article::where('active_flag',1)->count();
		$this->seoTools(request()->segment(1));  
		return view('knowledgebank.articles.index',compact('data','banners','data_count'));	
	}

	public function show($url)
	{	
	 $data = Article::with('authors')->where('url',$url)->where('active_flag',1)->orderBy('id','desc')->first();

    	 if(empty($data)){
            return view('errors.404');
        }
		$banners = $this->banners;
		$this->seoToolsView($data->id);  

		return view('knowledgebank.articles.show',compact('data','banners'));	
	}

	public function more($offset)
    {
		 $data = Article::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('url','title','sub_title','short_description','title_tag')->get();
		 return response(view('knowledgebank.articles.loadmore', compact('data'))->render());

	}
	
	public function displayOptimizedImage($path, $quality = 75) {
    $img = Image::make($path);
    $img->encode('jpg', $quality);
    $base64 = 'data:image/jpg;base64,' . base64_encode($img);

    return "<img src='$base64' alt='' />";
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
    
    	$data = Article::find($id);        
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

    
    public function zebrahospital()
    {   
       $data = Article::with('authors')->where('url','zebra-hospital-vision-study-global')->where('active_flag',1)->orderBy('id','desc')->first();

       if(empty($data)){
        return view('errors.404');
    }
    $banners = $this->banners;
    $this->seoToolsView($data->id);  

    return view('knowledgebank.articles.zebra-hospital',compact('data','banners'));   
}
}
