<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Form;
use Auth;
use App\Models\Testimonial;
use App\Models\News;
use App\Models\Pressrelease;
use App\Models\Partner;
use App\Models\Company;
use App\Models\Article;
use App\Models\ReaserchInsites;
use App\Models\CaseStudy;
use App\Models\TechnoTrend;
use App\Models\Interview;
use App\Models\WhitePaper;
use App\Models\IndustryReport;
use App\Models\AdvaisoryBoard;
use App\Models\Editorialarticle;
use App\Models\Ebook;
use App\Models\Event;
use App\Models\Project;
use App\Models\CompanyCatalog;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use \Session;
use \DB;
use \Mail;
use App\Models\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Models\CompanyProfile;
use App\Models\Banner;
use App\Models\Page;
## or
use SEO;
use Analytics;
use Spatie\Analytics\Period;
use App\Models\User;
use App\Models\tender;
use App\Models\Category;
use App\Models\Issue;
class TestController extends Controller
{
   protected $banners;
   protected $model;
   protected $current_issue; 
   protected $time;
    public function __construct(Form $model)
    {
        $this->model = $model;

        $this->time = \Carbon\Carbon::now()->format('Y-m-d');     
        $this->banners = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $this->time)->where('from_date', '<=' , $this->time)->orderBy('id','desc')->get();   
        $this->current_issue = Issue::where('active_flag', 1)->orderBy('id','desc')->first();
    }
    public function index()
    {       
    
        $this->seoTools('home');    
        $ebook = Ebook::where('issue_id',$this->current_issue->id)->where('active_flag', 1)->first();

        if(empty($ebook)){
         $alt_issue = Issue::where('active_flag', 1)->where('id', '!=', $this->current_issue->id)->orderBy('id','desc')->first();    
         $ebook = Ebook::where('issue_id',$alt_issue->id)->where('active_flag', 1)->first();          
        }

        $time = \Carbon\Carbon::now()->format('Y-m-d');        
        // $sliders = Slider::where('active_flag', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->orderBy('id', 'desc')->get();
        //$sliders = Slider::where('active_flag', 1)->orderBy('id','desc')->get()->take(10);
        $sliders=DB::SELECT('CALL Get_sliders()');
        
        
        // $sliders = Slider::where('active_flag', 1)->orderBy('id', 'desc')->get(); 

        $banners = $this->banners;

        //$news = News::where('active_flag',1)->orderBy('id', 'desc')->select('created_at','home_title','short_description','news_img_alt','url')->get()->take(3);

        $news=DB::SELECT('CALL Get_news()');


        //$pressreleases = Pressrelease::where('active_flag',1)->orderBy('id', 'desc')->select('created_at','home_title','short_description','img_alt','url')->get()->take(3); 

        $pressreleases=DB::SELECT('CALL Get_pressreleases()');

        // $events = Event::where('active_flag','=', 1)->where('end_date', '>=' , $this->time)->orderBy('start_date', 'ASC')->select('start_date','end_date','event_organiser','title','home_title','venue')->take(4)->get();

         $events=DB::SELECT('CALL Get_events()');



       $articles = Article::with('authors')->where('home_articles',1)->where('active_flag', 1)->inRandomOrder()->take(6)->get();

      // $articles=DB::SELECT('CALL Get_articles()');



        //$interviews = Interview::where('active_flag',1)->where('home_interview', 1)->orderBy('id', 'desc')->select('photo','alt_tag','url','title','designation','description')->first();
           $interviews=DB::SELECT('CALL Get_interviews()');

                   
       //$reaserchinsites = ReaserchInsites::where('active_flag',1)->where(' ', 1)->orderBy('id', 'desc')->select('url','title','short_description','title_tag')->first();

       $reaserchinsites=DB::SELECT('CALL Get_reaserchinsites()');


       // $casestudy = CaseStudy::where('active_flag',1)->where('home_casestudies', 1)->orderBy('id', 'desc')->select('url','title','short_description','title_tag')->first();

        $casestudy=DB::SELECT('CALL Get_casestudy()');

        //$technotrend = TechnoTrend::where('active_flag',1)->where('home_technotrends', 1)->orderBy('id', 'desc')->select('url','title','short_description','title_tag')->first();

        $technotrend=DB::SELECT('CALL Get_technotrend()');
        
        //$whitepaper = WhitePaper::where('active_flag',1)->where('home_whitepapers', 1)->orderBy('id', 'desc')->select('url','title','short_description','title_tag')->first();
        
         $whitepaper=DB::SELECT('CALL Get_whitepaper()');

        //$advaisoryboard = AdvaisoryBoard::where('active_flag', 1)->where('home_flag',1)->orderBy('id', 'desc')->take(6)->select('image','alt_tag','title_tag','title','home_description')->get();

        $advaisoryboard=DB::SELECT('CALL Get_advaisoryboard()');


        //$techno_equipment = Editorialarticle::where('category_id', 5)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $techno_equipment=DB::SELECT('CALL Get_techno_equipment()');


        //$healthcare_management = Editorialarticle::where('category_id',1)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $healthcare_management=DB::SELECT('CALL Get_healthcare_management()');


        //$surgical_speciality = Editorialarticle::where('category_id', 3)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $surgical_speciality=DB::SELECT('CALL Get_surgical_speciality()');

        //$information_technology = Editorialarticle::where('category_id', 7)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->first();

        $information_technology=DB::SELECT('CALL Get_information_technology()');

       // $medical_science = Editorialarticle::where('category_id', 2)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $medical_science=DB::SELECT('CALL Get_medical_science()');

       // $diagnostics = Editorialarticle::where('category_id', 4)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $diagnostics=DB::SELECT('CALL Get_diagnostics()');


        //$facilities = Editorialarticle::where('category_id', 6)->where('active_flag', 1)->where('on_home', 1)->orderBy('id','desc')->select('url','title_tag','title','short_description')->first();

        $facilities=DB::SELECT('CALL Get_facilities()');
        $pages = DB::table('pages')->pluck('id');
        return view('test/index' ,compact('pages','banners','news','pressreleases','articles','interviews','whitepaper','events','reaserchinsites','casestudy','technotrend','sliders','news','advaisoryboard','techno_equipment','healthcare_management','surgical_speciality','information_technology','medical_science','diagnostics','facilities','ebook'));
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
 
}