<?php
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\NewswireController;
use App\Http\Controllers\magazine\CmsController;
use App\Http\Controllers\magazine\EbookController;
use App\Http\Controllers\magazine\MagazineController;
use App\Http\Controllers\advertise\AdvertiseController;
use App\Http\Controllers\industryupdates\NewsController;
use App\Http\Controllers\industryupdates\EventController;
use App\Http\Controllers\knowledgebank\ArticleController;
use App\Http\Controllers\knowledgebank\ProjectsController;
use App\Http\Controllers\knowledgebank\BookshelfController;
use App\Http\Controllers\knowledgebank\InterviewsController;
use App\Http\Controllers\knowledgebank\CasestudiesController;
use App\Http\Controllers\knowledgebank\WhitepapersController;
use App\Http\Controllers\knowledgebank\TechnotrendsController;
use App\Http\Controllers\industryupdates\PressreleaseController;
use App\Http\Controllers\knowledgebank\IndustryreportsController;
use App\Http\Controllers\knowledgebank\ResearchinsightsController;
use App\Http\Controllers\Promotion\FlatPagesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\GeoIPController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// sitemap




 Route::get('/get-country', [GeoIPController::class, 'getCountry']);

 Route::get('sitemap.xml', [SitemapController::class,'index']);
 
 Route::get('mainpages/sitemap.xml', [SitemapController::class,'mainpages']);
 Route::get('healthcare-management/sitemap.xml', [SitemapController::class,'healthcaremanagement']);
 Route::get('medical-sciences/sitemap.xml', [SitemapController::class,'medicalsciences']);
 Route::get('surgical-speciality/sitemap.xml', [SitemapController::class,'surgicalspeciality']);
 Route::get('diagnostics/sitemap.xml', [SitemapController::class,'diagnostics']);
 Route::get('technology-equipment/sitemap.xml', [SitemapController::class,'technologyequipment']);
 Route::get('facilities-operations/sitemap.xml', [SitemapController::class,'facilitiesoperations']);
 Route::get('information-technology/sitemap.xml', [SitemapController::class,'informationtechnology']);
 Route::get('advertorials/sitemap.xml', [SitemapController::class,'advertorials']);
 Route::get('foreword/sitemap.xml', [SitemapController::class,'foreword']);
 Route::get('articles/sitemap.xml', [SitemapController::class,'articles']);
 Route::get('interviews/sitemap.xml', [SitemapController::class,'interviews']);
 Route::get('technotrends/sitemap.xml', [SitemapController::class,'technotrends']);
 Route::get('projects/sitemap.xml', [SitemapController::class,'projects']);
 Route::get('healthcare-reports/sitemap.xml', [SitemapController::class,'healthcarereports']);
 Route::get('researchinsights/sitemap.xml', [SitemapController::class,'researchinsights']);
 Route::get('bookshelf/sitemap.xml', [SitemapController::class,'bookshelf']);
 Route::get('casestudies/sitemap.xml', [SitemapController::class,'casestudies']);
 Route::get('whitepapers/sitemap.xml', [SitemapController::class,'whitepapers']);
 Route::get('news/sitemap.xml', [SitemapController::class,'news']);
 Route::get('pressreleases/sitemap.xml', [SitemapController::class,'pressreleases']);
 Route::get('events/sitemap.xml', [SitemapController::class,'events']);
 Route::get('webinars/sitemap.xml', [SitemapController::class,'webinars']);

Route::get('/',[HomeController::class,'index'])->name('mainhome');
Route::get('/testing',[TestController::class,'index'])->name('testhome');

Route::get('/robots.txt',function() {
	$response = response()->view('robots')->header('Content-Type', 'text/plain');
    $response->header('Content-Length',strlen($response->getOriginalContent()));
    return $response;
});

// Knowledge bank Routes
Route::group(['namespace'=>'knowledgebank'], function () {

	//static routes
	// Route::get('articles/zebra-hospital-vision-study-global',[ArticleController::class,'zebrahospital');
	Route::get('whitepapers/zebra-hospital-vision-study-global',[WhitepapersController::class,'zebrahospital']);
	Route::get('whitepapers/hyland-healthcare-clinical-services',[WhitepapersController::class,'hylandHealthcareClinicalServices']);
	

	//Articles
	Route::get('articles',[ArticleController::class,'index'])->name('articles');
	Route::get('articles/{url}',[ArticleController::class,'show'])->name('articles.url');
	Route::get('articles/more/{offset}',[ArticleController::class,'more'])->name('articles.loadmore');



	//Interviews
	Route::get('interviews',[InterviewsController::class,'index'])->name('interviews');
	Route::get('interviews/{url}',[InterviewsController::class,'show'])->name('interviews.url');
	Route::get('interviews/more/{offset}',[InterviewsController::class,'more'])->name('articles.loadmore');

	//whitepapers
	Route::get('whitepapers',[WhitepapersController::class,'index'])->name('whitepapers');
	Route::get('whitepapers/{url}',[WhitepapersController::class,'show'])->name('whitepapers.url');
	Route::get('whitepapers/more/{offset}',[WhitepapersController::class,'more'])->name('whitepapers.loadmore');
	Route::get('whitepapersform/whitepapers/{url}',[WhitepapersController::class,'whitepapersDownload'])->name('whitepapersform.download');

	Route::post('whitepapersdownloadpage/{url}',[WhitepapersController::class,'whitepapersPost'])->name('whitepapersform.post');
	Route::get('whitepapersdwnlink/{id}',[WhitepapersController::class,'whitepapersdwnlink']);
	
	//TechnoTrend
	Route::get('technotrends',[TechnotrendsController::class,'index'])->name('technotrends');
	Route::get('technotrends/{url}',[TechnotrendsController::class,'show'])->name('technotrends.url');
	Route::get('technotrends/more/{offset}',[TechnotrendsController::class,'more'])->name('technotrends.loadmore');

	//researchinsights
	Route::get('researchinsights',[ResearchinsightsController::class,'index'])->name('researchinsights');
	Route::get('researchinsights/{url}',[ResearchinsightsController::class,'show'])->name('researchinsights.url');
	Route::get('researchinsights/more/{offset}',[ResearchinsightsController::class,'more'])->name('researchinsights.loadmore');

	//Case Studies
	Route::get('casestudies',[CasestudiesController::class,'index'])->name('casestudies');
	Route::get('casestudies/{url}',[CasestudiesController::class,'show'])->name('casestudies.url');
	Route::get('casestudies/more/{offset}',[CasestudiesController::class,'more'])->name('casestudies.loadmore');

	Route::get('casestudiesform/{url}',[CasestudiesController::class,'casestudiesDownload'])->name('casestudiesform.download');

	Route::post('casestudiedownloadpage/{url}',[CasestudiesController::class,'casestudiesPost'])->name('casestudiesform.post');
	Route::get('casestudiesdwnlink/{id}',[CasestudiesController::class,'casestudiesdwnlink']);	
	//Articles
	Route::get('bookshelf',[BookshelfController::class,'index'])->name('bookshelf');
	Route::get('bookshelf/{url}',[BookshelfController::class,'show'])->name('bookshelf.url');

	//Projects
	Route::get('projects',[ProjectsController::class,'index'])->name('projects');
	Route::get('projects/{url}',[ProjectsController::class,'show'])->name('projects.url');
	Route::get('projects/more/{offset}',[ProjectsController::class,'more'])->name('projects.loadmore');
	
	//Projects
	Route::get('healthcare-reports',[IndustryreportsController::class,'index'])->name('healthcare-reports');
	Route::get('healthcare-reports/{url}',[IndustryreportsController::class,'show'])->name('healthcare-reports.url');
	Route::get('healthcare-reports/more/{offset}',[IndustryreportsController::class,'more'])->name('healthcare-reports.loadmore');




});
// End Knowledge bank Routes

// Magazine Routes


Route::group(['namespace'=>'magazine'], function () {
	Route::get('magazine',[EbookController::class,'index'])->name('magazine.index');
	
	Route::get('magazinesection',[EbookController::class,'indexNew'])->name('magazine.index_new');

	Route::get('welcome',[EbookController::class,'welcome'])->name('welcome');

	Route::post('welcome',[EbookController::class,'welcome'])->name('welcome.post');

	Route::get('archives',[EbookController::class,'archives'])->name('ebook.archives');

	Route::post('archives-magazine/{issue}',[EbookController::class,'ebookPost'])->name('ebook.post');
	
	Route::get('e-book',[EbookController::class,'ebook'])->name('ebook.ebook');

	Route::post('e-book-view',[EbookController::class,'ebook'])->name('ebook.post');
	Route::get('e-book-view/{ebook}',[EbookController::class,'ebookview'])->name('ebook.success');

	Route::get('ahhmmagazine',[EbookController::class,'ahhmmagazine'])->name('ahhmmagazine');

	Route::get('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe');

	Route::post('ebook-subscribe',[EbookController::class,'ebookSubscribe'])->name('ebook.subscribe.post');

	Route::get('archives-magazine/{issue}',[EbookController::class,'archiveMagazine'])->name('ebook.archivesmagazine');

	Route::get('author-guidelines',[CmsController::class,'guidelines'])->name('guidelines');

	Route::get('authorguidelines-download',[CmsController::class,'guidelineDownload'])->name('guidelines.download');

	Route::post('authorguidelines-download',[MagazineController::class,'authorguidelinesPost'])->name('guidelines.post');

	Route::get('autherguidlinesdwnlink',[MagazineController::class,'autherguidlinesdwnlink']);	

	Route::get('advisory-board',[CmsController::class,'advisoryBoard'])->name('advisoryboard');

	Route::get('advisory-board/more/{offset}',[CmsController::class,'advisoryboardMore']);

	Route::get('testimonials',[CmsController::class,'testimonials'])->name('testimonials');

	Route::get('testimonials/more/{offset}',[CmsController::class,'testimonialsMore']);

	Route::get('forthcoming-issue',[CmsController::class,'forthcomingIssue'])->name('forthcoming');

	Route::get('terms-conditions',[CmsController::class,'termsConditions'])->name('termsconditions');

	Route::get('contactus',[CmsController::class,'contactUs'])->name('contactus');
	Route::post('contactus-post', [CmsController::class,'contactUs'])->name('contactUs.post');
	Route::get('contactus-success', [CmsController::class,'contactUs'])->name('contactUs.success');

	Route::get('aboutus',[CmsController::class,'aboutUs'])->name('aboutus');



	Route::get('advertise', [CmsController::class,'advertise'])->name('advertise');

	//Route::get('advertisesection', [CmsController::class,'advertiseNew'])->name('advertiseNew');

	//Route::get('test-mediapack', [CmsController::class,'advertisemedia')->name('test-mediapack');

	
	Route::middleware(['web'])->group(function () {
		
	});
	

	Route::post('advertise-success', [CmsController::class,'advertise'])->name('advertise.post');
	
	Route::get('magazinemediapack/success',[CmsController::class,'mediapackdwnlink'])->name('magazinemediapack');

	Route::get('new-subscribe',[CmsController::class,'register'])->name('register');

	Route::get('latest-ebook',[EbookController::class,'latestIssue'])->name('latestebook');


	Route::get('banner-advertisements', [CmsController::class,'bannerAdvertisement'])->name('banner.advertisement');

	Route::post('banner-advertisements', [CmsController::class,'bannerAdvertisement'])->name('banner.advertisement.post');

	Route::get('e-mail-marketing', [CmsController::class,'emailMarketing'])->name('emailMarketing');

	Route::post('e-mail-marketing', [CmsController::class,'emailMarketing'])->name('emailMarketing.post');

	Route::get('e-newsletter-marketing', [CmsController::class,'newslettermarketing'])->name('newslettermarketing');

	Route::post('e-newsletter-marketing', [CmsController::class,'newslettermarketing'])->name('newslettermarketing.post');

	// Route::get('e-newsletter-marketing-download-form', [CmsController::class,'newslettermarketing');
	Route::get('e-newsletter-marketing-download-form', function(){
		return redirect('e-newsletter-marketing');
	});



	Route::get('magazine-subscription', [CmsController::class,'magazineSubscription'])->name('magazine.subscription');
	Route::get('magazine-subscription-success', [CmsController::class,'magazineSubscription'])->name('magazine.subscription.success');
	Route::post('magazine-subscription-success', [CmsController::class,'magazineSubscription'])->name('magazine.subscription.post');

	

	
// Route::get('healthcare-marketing/services',[CmsController::class,'services']);
 Route::get('healthcare-marketing/display-advertising-solutions',[CmsController::class,'displayAdvertisingsolution']);
// Route::get('healthcare-marketing/services/display-advertising',[CmsController::class,'displayAdvertising']);
// Route::get('healthcare-marketing/services/newsletter-sponsorship',[CmsController::class,'newsletterSponsorship']);
// Route::get('healthcare-marketing/services/targeted-display-advertising',[CmsController::class,'targetedDisplayAdvertising']);

// Route::get('healthcare-marketing/marketing-strategy-solutions',[CmsController::class,'marketingStrategySolutions']);
// Route::get('healthcare-marketing/services/sponsored-webinar-series',[CmsController::class,'sponsoredWebinarSeries']);
// Route::get('healthcare-marketing/services/surveys-assessments',[CmsController::class,'surveysAssessments']);
// Route::get('healthcare-marketing/services/content-syndication',[CmsController::class,'contentSyndication']);
// Route::get('healthcare-marketing/services/account-based-marketing',[CmsController::class,'accountBasedmarketing']);
// Route::get('healthcare-marketing/services/email-marketing',[CmsController::class,'marketing']);
// Route::get('healthcare-marketing/services/webinars',[CmsController::class,'webinars']);

// Route::get('healthcare-marketing/printmedia-solutions',[CmsController::class,'printmediaSolutions']);
// Route::get('healthcare-marketing/services/print-advertising',[CmsController::class,'printadvertising']);
// Route::get('healthcare-marketing/services/advertorial',[CmsController::class,'advertorial']);

// Route::get('healthcare-marketing/services/outbound-email-marketing',[CmsController::class,'outboundEmailMarketing']);
// Route::get('healthcare-marketing/services/b2b-microsites',[CmsController::class,'b2bMicrosites']);
// Route::get('healthcare-marketing/services/print-media-advertising',[CmsController::class,'printMediaAdvertising']);
// Route::get('healthcare-marketing/services/ebook-advertising',[CmsController::class,'ebookAdvertising']);



Route::get('healthcare-marketing/services',[CmsController::class,'services']);


Route::get('healthcare-marketing/b2b-display-advertising',[CmsController::class,'displayAdvertisingsolution']);
Route::post('healthcare-marketing/b2b-display-advertising-post',[CmsController::class,'displayAdvertisingsolution'])->name('displayAdvertisingsolution.post');
Route::get('healthcare-marketing/b2b-display-advertising-success',[CmsController::class,'displayAdvertisingsolution'])->name('displayAdvertisingsolution.success');



Route::get('healthcare-marketing/services/display-banner-advertising',[CmsController::class,'displayAdvertising']);
Route::post('healthcare-marketing/services/display-banner-advertising-post',[CmsController::class,'displayAdvertising'])->name('displayAdvertising.post');
Route::get('healthcare-marketing/services/display-banner-advertising-success',[CmsController::class,'displayAdvertising'])->name('displayAdvertising.success');


Route::get('healthcare-marketing/services/newsletter-sponsorship',[CmsController::class,'newsletterSponsorship']);
Route::post('healthcare-marketing/services/newsletter-sponsorship-success',[CmsController::class,'newsletterSponsorship'])->name('newsletterSponsorship.post');
Route::get('healthcare-marketing/services/newsletter-sponsorship-success',[CmsController::class,'newsletterSponsorship'])->name('newsletterSponsorship.success');

Route::get('healthcare-marketing/services/geo-targeted-display',[CmsController::class,'targetedDisplayAdvertising']);
Route::post('healthcare-marketing/services/geo-targeted-display-post',[CmsController::class,'targetedDisplayAdvertising'])->name('targetedDisplayAdvertising.post');
Route::get('healthcare-marketing/services/geo-targeted-display-success',[CmsController::class,'targetedDisplayAdvertising'])->name('targetedDisplayAdvertising.success');

//Route::get('healthcare-marketing/marketing-strategy-solutions',[CmsController::class,'marketingStrategySolutions']);

Route::get('healthcare-marketing/services/sponsored-webinar-series',[CmsController::class,'sponsoredWebinarSeries']);
Route::post('healthcare-marketing/services/sponsored-webinar-series-post',[CmsController::class,'sponsoredWebinarSeries'])->name('sponsoredWebinarSeries.post');
Route::get('healthcare-marketing/services/sponsored-webinar-series-success',[CmsController::class,'sponsoredWebinarSeries'])->name('sponsoredWebinarSeries.success');

Route::get('healthcare-marketing/services/b2b-surveys-assessments',[CmsController::class,'surveysAssessments']);
Route::post('healthcare-marketing/services/b2b-surveys-assessments-success',[CmsController::class,'surveysAssessments'])->name('surveysAssessments.post');
Route::get('healthcare-marketing/services/b2b-surveys-assessments-success',[CmsController::class,'surveysAssessments'])->name('surveysAssessments.success');

Route::get('healthcare-marketing/services/content-syndication',[CmsController::class,'contentSyndication']);

Route::get('healthcare-marketing/services/account-based-marketing',[CmsController::class,'accountBasedmarketing']);
Route::post('healthcare-marketing/services/account-based-marketing-success',[CmsController::class,'accountBasedmarketing'])->name('accountBasedmarketing.post');
Route::get('healthcare-marketing/services/account-based-marketing-success',[CmsController::class,'accountBasedmarketing'])->name('accountBasedmarketing.success');

Route::get('healthcare-marketing/services/b2b-email-marketing',[CmsController::class,'marketing']);
Route::post('healthcare-marketing/services/b2b-email-marketing',[CmsController::class,'marketing'])->name('marketing.post');
Route::get('healthcare-marketing/services/b2b-email-marketing',[CmsController::class,'marketing'])->name('marketing.success');

Route::get('healthcare-marketing/services/webinars',[CmsController::class,'webinars']);
Route::post('healthcare-marketing/services/webinars-post',[CmsController::class,'webinars'])->name('webinars.post');
Route::get('healthcare-marketing/services/webinars-success',[CmsController::class,'webinars'])->name('webinars.success');


//Route::get('healthcare-marketing/printmedia-solutions',[CmsController::class,'printmediaSolutions']);
Route::get('healthcare-marketing/services/b2b-print-advertising',[CmsController::class,'printadvertising']);
Route::post('healthcare-marketing/services/b2b-print-advertising-success',[CmsController::class,'printadvertising'])->name('printadvertising.post');
Route::get('healthcare-marketing/services/b2b-print-advertising-success',[CmsController::class,'printadvertising'])->name('printadvertising.success');

Route::get('healthcare-marketing/services/b2b-print-advertorial',[CmsController::class,'advertorial']);
Route::post('healthcare-marketing/services/b2b-print-advertorial-success',[CmsController::class,'advertorial'])->name('advertorial.post');
Route::get('healthcare-marketing/services/b2b-print-advertorial-success',[CmsController::class,'advertorial'])->name('advertorial.success');

Route::get('healthcare-marketing/services/outbound-email-marketing',[CmsController::class,'outboundEmailMarketing']);
Route::post('healthcare-marketing/services/outbound-email-marketing-post',[CmsController::class,'outboundEmailMarketing'])->name('outboundEmailMarketing.post');
Route::get('healthcare-marketing/services/outbound-email-marketing-success',[CmsController::class,'outboundEmailMarketing'])->name('outboundEmailMarketing.success');

Route::get('healthcare-marketing/services/b2b-microsites',[CmsController::class,'b2bMicrosites']);
Route::post('healthcare-marketing/services/b2b-microsites-success',[CmsController::class,'b2bMicrosites'])->name('b2bMicrosites.post');
Route::get('healthcare-marketing/services/b2b-microsites-success',[CmsController::class,'b2bMicrosites'])->name('b2bMicrosites.success');

Route::get('healthcare-marketing/services/print-media-advertising',[CmsController::class,'printMediaAdvertising']);
Route::post('healthcare-marketing/services/print-media-advertising-success',[CmsController::class,'printMediaAdvertising'])->name('printMediaAdvertising.post');
Route::get('healthcare-marketing/services/print-media-advertising-success',[CmsController::class,'printMediaAdvertising'])->name('printMediaAdvertising.success');

Route::get('healthcare-marketing/services/ebook-advertising',[CmsController::class,'ebookAdvertising']);





 
// Route::get('latest-ebook',function(){
// 	return redirect('http://emag.pharmafocusasia.com/');
// });

});
// End Magazine Routes
//Formse-newsletter-subscribe
	// Media Pack Routes

	
	Route::get('mediapacks',[FormController::class,'mediapacks'])->name('mediapacks');

	Route::post('mediapacks',[FormController::class,'mediapacks'])->name('mediapacks.post');

	Route::get('mediapacks/success',[FormController::class,'mediapackDownload'])->name('mediapacks.success');

	Route::get('mediapackdwnlink',[FormController::class,'mediapackdwnlink']);

	
	// End Media Pack Routes
	Route::get('e-newsletter-subscribe',[FormController::class,'eNewsletter'])->name('enewsletter.subscribe');
	
	Route::post('e-newsletter-subscribe',[FormController::class,'eNewsletter'])->name('enewsletter.post');
	Route::get('e-newsletter-subscribe/success',[FormController::class,'eNewsletter'])->name('enewsletter.success');

	Route::get('editorial-calendar',[FormController::class,'editorialCalendar'])->name('editorialcalendar');
	Route::post('editorial-calendar-success',[FormController::class,'editorialCalendar'])->name('editorialcalendar.post');
	Route::get('editorial-calendar/success',[FormController::class,'editorialCalendarSuccess'])->name('editorialcalendar.success');
	Route::get('editorialcalendardwnlink',[FormController::class,'editorialCalendardwnlink']);

	// Route::get('registration',[FormController::class,'registration'])->name('registration');
	// Route::post('registration',[FormController::class,'registration'])->name('registration.post');
	// Route::get('registration/success',[FormController::class,'registration'])->name('registration.success');

	//Route::get('subscribe',[FormController::class,'registration')->name('subscribe');

	Route::get('post-event',[FormController::class,'postEvent'])->name('postevent.subscribe');
	Route::post('post-event',[FormController::class,'postEvent'])->name('postevent.post');
	Route::get('post-event/success',[FormController::class,'postEvent'])->name('postevent.success');

// Advertise Routes
Route::group(['namespace'=>'advertise'], function () {
	


	Route::get('terms',[AdvertiseController::class,'terms'])->name('advertise.terms');

	Route::get('clients',[AdvertiseController::class,'clients'])->name('advertise.clients');

	Route::get('e-newsletter',[AdvertiseController::class,'eNewsletter'])->name('enewsletter');

	Route::get('enewsletter-archives',[AdvertiseController::class,'eNewsletterArchives'])->name('enewsletter.archives');

	Route::get('emailblast',[AdvertiseController::class,'emailblast'])->name('emailblast');

	Route::get('current-edm',[AdvertiseController::class,'currentEdm'])->name('currentedm');

	Route::get('emailblast-archives',[AdvertiseController::class,'emailblastarchives'])->name('emailblastarchives');

	Route::get('itsm-webinar',[AdvertiseController::class,'itsmWebinar'])->name('itsm-webinar');
	
	
	});
// End Advertise Routes

//Industry Updates
Route::group(['namespace'=>'industryupdates'], function () {
	//pressreleases
	Route::get('pressreleases',[PressreleaseController::class,'index'])->name('pressreleases');
	Route::get('pressreleases/{url}',[PressreleaseController::class,'show'])->name('pressreleases.url');
	Route::get('pressreleases/more/{offset}',[PressreleaseController::class,'more'])->name('pressreleases.loadmore');
	Route::get('listpressreleases/month/{month}/year/{year}',[PressreleaseController::class,'filter'])->name('listpressreleases.filter');
	Route::get('listpressreleases/month/{month}/year/{year}/{offset}',[PressreleaseController::class,'listpressreleasesFilter'])->name('listpressreleases.more');

	//news
	Route::get('news',[NewsController::class,'index'])->name('news');
	Route::get('news/{url}',[NewsController::class,'show'])->name('news.url');
	Route::get('news/more/{offset}',[NewsController::class,'more'])->name('news.loadmore');
	Route::get('listnews/month/{month}/year/{year}',[NewsController::class,'filter'])->name('listnews.filter');
	Route::get('listnews/month/{month}/year/{year}/{offset}',[NewsController::class,'listnewsFilter'])->name('listnews.more');

	//Events
	Route::get('events',[EventController::class,'index'])->name('events');
	//Route::get('events/{url}',[EventController::class,'show'])->name('events.url');
	Route::get('events/more/{offset}/{date}',[EventController::class,'more'])->name('events.loadmore');
	Route::get('events/month/{month}/year/{year}',[EventController::class,'filter'])->name('events.filter');
	Route::get('events/filtermore/{offset}/{month}/{year}/{date}',[EventController::class,'moreFilter'])->name('events.moreFilter');	
	
	// Route::get('reports','ReportsController@index')->name('reports');
	// Route::get('reports/test','ReportsController@show')->name('reports.url');

	/*Route::get('reports','ReportsController@index')->name('reports');
	Route::get('reports/{url}','ReportsController@show')->name('reports.url');
	Route::get('reports/more/{offset}','ReportsController@more')->name('reports.loadmore');*/

});
//End industry Updates

//webinars
Route::get('webinars',[WebinarController::class,'index'])->name('webinars');
//End webinars

//Single Pages




//EndSingle Pages
	


// Route::get('healthcare-management',function(){
// 	return view('editorial.view');
// });

Route::get('editorialsection',[EditorialController::class,'editorialIndex']);
Route::get('knowledgebank',[EditorialController::class,'knowledgebankIndex']);
Route::get('industryupdates',[EditorialController::class,'industryupdatesIndex']);


Route::get('healthcare-management',[EditorialController::class,'healthcaremanagement']);
Route::get('healthcare-management/{slug}',[EditorialController::class,'healthcaremanagementview'])->name('healthcare-management.slug');

Route::get('editorialloadmore/{slug}/{offset}',[EditorialController::class,'more']);


Route::get('medical-sciences',[EditorialController::class,'medicalscience']);
Route::get('medical-sciences/{slug}',[EditorialController::class,'medicalsciencesview'])->name('medical-sciences.slug');

Route::get('surgical-speciality',[EditorialController::class,'surgical']);
Route::get('surgical-speciality/{slug}',[EditorialController::class,'surgicalview'])->name('surgical-speciality.slug');

Route::get('diagnostics',[EditorialController::class,'diagnostics']);
Route::get('diagnostics/{slug}',[EditorialController::class,'diagnosticsview'])->name('diagnostics.slug');


Route::get('technology-equipment',[EditorialController::class,'technology']);
Route::get('technology-equipment/{slug}',[EditorialController::class,'technologyview'])->name('technology-equipment.slug');

Route::get('facilities-operations',[EditorialController::class,'facilities']);
Route::get('facilities-operations/{slug}',[EditorialController::class,'facilitiesview'])->name('facilities-operations.slug');


Route::get('information-technology',[EditorialController::class,'information']);
Route::get('information-technology/{slug}',[EditorialController::class,'informationview'])->name('information-technology.slug');

Route::get('advertorials',[EditorialController::class,'advertorials']);
Route::get('advertorials/{slug}',[EditorialController::class,'advertorialsview'])->name('advertorials.slug');

Route::get('foreword',[EditorialController::class,'foreword']);
Route::get('foreword/{slug}',[EditorialController::class,'forewordview'])->name('foreword.slug');


Route::get('industryreports',[EditorialController::class,'industryreportsIndex']);	

// Route::get('archives',function(){
// 	return view('magazine.archives');
// });

// Route::get('register',function(){
// 	return view('forms.register');
// });

Route::get('search',function(){
	return redirect('/');
});
// Route::get('/search', 'SearchController@index');
Route::post('/search', [SearchController::class,'search'])->name('search');

/* Xml Parsing */
  Route::resource('newswires',NewswireController::class);
  Route::get('newswires/{news_url}',[NewswireController::class,'show'])->name('newswires.url');
  Route::get('viewnewswires/month/{month}/year/{year}',[NewswireController::class,'filter'])->name('viewnewswires.filter');
Route::get('viewnewswires/month/{month}/year/{year}/{offset}',[NewswireController::class,'vienewswiresFilter'])->name('viewnewswires.more');
Route::get('morenewswires/more/{offset}',[NewswireController::class,'more'])->name('newswires.loadmore');

/* End Xml Parsing */


/* Webinars */ 
Route::get('zebra-healthcare-webinar',[WebinarController::class,'zebraHealthcareWebinar']);
Route::post('zebra-healthcare-webinar-success',[WebinarController::class,'zebraHealthcareWebinar'])->name('zebraHealthcareWebinar.post');
Route::get('zebra-healthcare-webinar-success',[WebinarController::class,'zebraHealthcareWebinar'])->name('zebraHealthcareWebinar.success');
Route::get('zebra-healthcare-webinar/zebra',[WebinarController::class,'zebraHealthcareWebinar']);


Route::get('qualtrics-healthcare-webinar',[WebinarController::class,'qualtricsHealthcare']);
Route::post('qualtrics-healthcare-webinar-success',[WebinarController::class,'qualtricsHealthcare'])->name('qualtricshealthcare.post');
Route::get('qualtrics-healthcare-webinar-success',[WebinarController::class,'qualtricsHealthcare'])->name('qualtricshealthcare.success');

Route::get('integrated-digital-healthcare-webinar',[WebinarController::class,'integratedDigital']);
Route::post('integrated-digital-healthcare-webinar-success',[WebinarController::class,'integratedDigital'])->name('integrateddigital.post');
Route::get('integrated-digital-healthcare-webinar-success',[WebinarController::class,'integratedDigital'])->name('integrateddigital.success');

Route::get('hyland-medical-imaging-webinar',[WebinarController::class,'hylandMedical']);
Route::post('hyland-medical-imaging-webinar-success',[WebinarController::class,'hylandMedical'])->name('hylandmedical.post');
Route::get('hyland-medical-imaging-webinar-success',[WebinarController::class,'hylandMedical'])->name('hylandmedical.success');

Route::get('hyland-medical-imaging-webinar-hyland',[WebinarController::class,'hylandMedical']);
Route::get('hyland-medical-imaging-webinar-hyland-success',[WebinarController::class,'hylandMedical'])->name('hylandmedicaltag.success');

Route::get('resmed-webinar-series',[WebinarController::class,'resmedWebinar']);
Route::post('resmed-webinar-series-success',[WebinarController::class,'resmedWebinar'])->name('resmedwebinar.post');
Route::get('resmed-webinar-series-success',[WebinarController::class,'resmedWebinar'])->name('resmedwebinar.success');

Route::get('advantech',[WebinarController::class,'advanTech']);
Route::post('advantech-success',[WebinarController::class,'advanTech'])->name('advantech.post');
Route::get('advantech-success',[WebinarController::class,'advanTech'])->name('advantech.success');

Route::get('resmed-webinar-series-home-sleep-testing',[WebinarController::class,'resmedhomeSleep']);
Route::post('resmed-webinar-series-home-sleep-testing-success',[WebinarController::class,'resmedhomeSleep'])->name('resmedhomesleep.post');
Route::get('resmed-webinar-series-home-sleep-testing-success',[WebinarController::class,'resmedhomeSleep'])->name('resmedhomesleep.success');

/* analytics */

Route::get('/domain', [GooglereportsdomainController::class,'domainreport'])->name('domain');
Route::resource('analyticaldomainreports','GooglereportsdomainController');

Route::post('googlecaptha',[FormController::class,'checkgooglecaptha'])->name("gogglecaptha");


//Route::get('magazine-subscribe',[FormController::class,'magazineSubscribe']);

Route::get('subscribe-1',[FormController::class,'magazineSubscribe'])->name('subscribe');

//Route::post('magazine-subscribe-post',[FormController::class,'magazineSubscribepost']); 

//Route::get('subscribe/success',[FormController::class,'magazineSubscribe'])->name('magazinesubscribe.success');


Route::get('subscribe',[FormController::class,'magazineSubscribe1post']);
Route::post('magazine-subscribe-success',[FormController::class,'magazineSubscribe1post'])->name('magazinesubscribe.post'); 
Route::get('subscribe/success',[FormController::class,'magazineSubscribe1post'])->name('magazinesubscribe1.success');

//Route::get('register',[FormController::class,'newSubscribe'])->name('newSubscribe');


// register and login
// Route::post('/register',[RegisterController::class,'create'])->name('register.post');
// Route::get('/login',[LoginController::class,'showloginform']);
// Route::post('/login', [LoginController::class, 'login']);


Route::get('/login', [AuthController::class,'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.post');
// Route::get('/register', [AuthController::class,'showRegistrationForm']);
//Route::post('/register-post', [AuthController::class,'register'])->name('register.post');
//Route::get('/verify-otp', [AuthController::class,'verifyOtpform'])->name('verify-otp-form');
//Route::post('/verify-otp', [AuthController::class,'verifyOtp'])->name('verify-otp');
//end regisetr and login
 


/*cmp mediapack*/
Route::get('cmp-mediapack',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks');

Route::post('cmpmediapacks',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks.post');

Route::get('cmp-mediapack-success',[FormController::class,'cmpmediapacks'])->name('cmpmediapacks.success');


Route::get('equinix-webinar-2020',[WebinarController::class,'equinixWebinar']);
Route::post('equinix-webinar-2020-success',[WebinarController::class,'equinixWebinar'])->name('equinixWebinar.post');
Route::get('equinix-webinar-2020-success',[WebinarController::class,'equinixWebinar'])->name('equinixWebinar.success');

Route::get('advantech-healthcare-on-demand-telehealth-today',[WebinarController::class,'advanTechHealthCareOnDemand']);
Route::post('advantech-healthcare-on-demand-telehealth-today-success',[WebinarController::class,'advanTechHealthCareOnDemand'])->name('advantech-healthcare-on-demand-telehealth-today.post');
Route::get('advantech-healthcare-on-demand-telehealth-today-success',[WebinarController::class,'advanTechHealthCareOnDemand'])->name('advantech-healthcare-on-demand-telehealth-today.success');

Route::get('advantech-healthcare-on-demand-telehealth-today-video-success',[WebinarController::class,'advanTechHealthCareOnDemandVideoSuccess'])->name('advantech-healthcare-on-demand-telehealth-today.video-success');

Route::get('resmed-webinar-series3-telemonitoring-home-niv-patients',[WebinarController::class,'resmedWebinarSeries3']);

Route::post('resmed-webinar-series3-telemonitoring-home-niv-patients-success',[WebinarController::class,'resmedWebinarSeries3'])->name('resmed-webinar-series3-telemonitoring-home-niv-patients.post');

Route::get('resmed-webinar-series3-telemonitoring-home-niv-patients-success',[WebinarController::class,'resmedWebinarSeries3'])->name('resmed-webinar-series3-telemonitoring-home-niv-patients.success');

Route::get('it-predictions-2021-anz-edition',[WebinarController::class,'modernHealthcareOrganisations']);
Route::post('itsm-for-modern-healthcare-organisations-success',[WebinarController::class,'modernHealthcareOrganisations'])->name('modernHealthcareOorganisations.post');
Route::get('it-predictions-2021-anz-edition-success',[WebinarController::class,'modernHealthcareOrganisations'])->name('modernHealthcareOorganisations.success');


Route::get('itsm-for-modern-healthcare-organisations-freshworks',[WebinarController::class,'modernHealthcareOrganisations']);

Route::post('itsm-for-modern-healthcare-organisations-success',[WebinarController::class,'modernHealthcareOrganisations'])->name('modernHealthcareOorganisations.post');

Route::get('itsm-for-modern-healthcare-organisations-success-freshworks',[WebinarController::class,'modernHealthcareOrganisations'])->name('modernHealthcareOorganisationsfreshworks.success');


Route::get('resmed-4th-webinar-series',[WebinarController::class,'resmed4thwebinarseries']);
Route::post('resmed-4th-webinar-series-success',[WebinarController::class,'resmed4thwebinarseries'])->name('resmed4thwebinarseries.post');
Route::get('resmed-4th-webinar-series-success',[WebinarController::class,'resmed4thwebinarseries'])->name('resmed4thwebinarseries.success');




Route::get('barco-nio-fusion-12mp',[WebinarController::class,'barcoNioFusion']);

Route::post('barco-nio-fusion-12mp-success',[WebinarController::class,'barcoNioFusion'])->name('barcoNioFusion.post');

Route::get('barco-nio-fusion-12mp-success',[WebinarController::class,'barcoNioFusion'])->name('barcoNioFusion.success');

Route::get('barco-nio-fusion-12mp-video-success',[WebinarController::class,'barcoNioFusionVideoSuccess'])->name('barco-nio-fusion-12mp.video-success');



Route::get('avalue-healthcare-manufacturing-embedded-solutions',[WebinarController::class,'avaluehealthcare']);

Route::post('avalue-healthcare-manufacturing-embedded-solutions-success',[WebinarController::class,'avaluehealthcare'])->name('avaluehealthcare.post');

Route::get('avalue-healthcare-manufacturing-embedded-solutions-success',[WebinarController::class,'avaluehealthcare'])->name('avaluehealthcare.success');


Route::get('remote-it-enabled-tools',[WebinarController::class,'remoteItEnabledTools']);

Route::post('remote-it-enabled-tools-success',[WebinarController::class,'remoteItEnabledTools'])->name('remoteItEnabledTools.post');

Route::get('remote-it-enabled-tools-success',[WebinarController::class,'remoteItEnabledTools'])->name('remoteItEnabledTools.success');


Route::get('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools',[WebinarController::class,'ensuringUninterruptedServiceDelivery']);
Route::post('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools-success',[WebinarController::class,'ensuringUninterruptedServiceDelivery'])->name('ensuringUninterruptedServiceDelivery.post');
Route::get('ensuring-uninterrupted-service-delivery-with-remote-it-enabled-tools-success',[WebinarController::class,'ensuringUninterruptedServiceDelivery'])->name('ensuringUninterruptedServiceDelivery.success');

Route::get('new-care-models-and-the-future-of-healthcare',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare']);
Route::post('new-care-models-and-the-future-of-healthcare-success',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare'])->name('newCareModelsAndTheFutureofHealthcare.post');
Route::get('new-care-models-and-the-future-of-healthcare-success',[WebinarController::class,'newCareModelsAndTheFutureofHealthcare'])->name('newCareModelsAndTheFutureofHealthcare.success');

Route::get('digital-health-using-technology-to-engage-with-patients',[WebinarController::class,'digitalHealthUsingTechnology']);
Route::post('digital-health-using-technology-to-engage-with-patients-success',[WebinarController::class,'digitalHealthUsingTechnology'])->name('digitalHealthUsingTechnology.post');
Route::get('digital-health-using-technology-to-engage-with-patients-success',[WebinarController::class,'digitalHealthUsingTechnology'])->name('digitalHealthUsingTechnology.success');


Route::get('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time',[WebinarController::class,'dataDrivenHealthcare']);
Route::post('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time-success',[WebinarController::class,'dataDrivenHealthcare'])->name('dataDrivenHealthcare.post');
Route::get('data-driven-healthcare-the-right-way-in-the-right-place-at-the-right-time-success',[WebinarController::class,'dataDrivenHealthcare'])->name('dataDrivenHealthcare.success');

Route::get('medavis-edm-webinar',[WebinarController::class,'medavisedmwebinar']);
Route::post('medavis-edm-webinar-success',[WebinarController::class,'medavisedmwebinar'])->name('medavisedmwebinar.post');
Route::get('medavis-edm-webinar-success',[WebinarController::class,'medavisedmwebinar'])->name('medavisedmwebinar.success');

Route::get('2022-smart-healthcare-webinar',[WebinarController::class,'smartHealthcareWebinar']);
Route::post('2022-smart-healthcare-webinar-success',[WebinarController::class,'smartHealthcareWebinar'])->name('smartHealthcareWebinar.post');
Route::get('2022-smart-healthcare-webinar-success',[WebinarController::class,'smartHealthcareWebinar'])->name('smartHealthcareWebinar.success');

Route::get('promotion/uniphore-rcm-webinar',[WebinarController::class,'uniphoreRcmWebinar']);
Route::post('promotion/uniphore-rcm-webinar-success',[WebinarController::class,'uniphoreRcmWebinar'])->name('uniphoreRcmWebinar.post');
Route::get('promotion/uniphore-rcm-webinar-success',[WebinarController::class,'uniphoreRcmWebinar'])->name('uniphoreRcmWebinar.success');

Route::get('promotion/siemens-magnetom-free-star-mri',[WebinarController::class,'siemensMagnetomFreeStarMri'])->name('siemensMagnetomFreeStarMri');
Route::post('promotion/siemens-magnetom-free-star-mri-success',[WebinarController::class,'siemensMagnetomFreeStarMri'])->name('siemensMagnetomFreeStarMri.post');
Route::get('promotion/siemens-magnetom-free-star-mri-success',[WebinarController::class,'siemensMagnetomFreeStarMri'])->name('siemensMagnetomFreeStarMri.success');
// Promotions Routes

Route::prefix('promotion')->group(function () {

Route::get('/elsevier-covid-19-healthcare-hub',[FlatPagesController::class,'elsevierCovidHealthcareHub']);
Route::post('/elsevier-covid-19-healthcare-hub-success',[FlatPagesController::class,'elsevierCovidHealthcareHub'])->name('elsevierCovidHealthcareHub.post');
Route::get('/elsevier-covid-19-healthcare-hub-success',[FlatPagesController::class,'elsevierCovidHealthcareHub'])->name('elsevierCovidHealthcareHub.success');

Route::get('/elsevier-clinician-of-the-future',[FlatPagesController::class,'elsevierClinicianOfTheFuture']);
Route::post('/elsevier-clinician-of-the-future-success',[FlatPagesController::class,'elsevierClinicianOfTheFuture'])->name('elsevierClinicianOfTheFuture.post');
Route::get('/elsevier-clinician-of-the-future-success',[FlatPagesController::class,'elsevierClinicianOfTheFuture'])->name('elsevierClinicianOfTheFuture.success');


Route::get('/stiegelmeyer-gmbh-&-co-kg',[FlatPagesController::class,'stiegelmeyerGmbh'])->name('stiegelmeyerGmbh');
Route::post('/stiegelmeyer-gmbh-&-co-kg-success',[FlatPagesController::class,'stiegelmeyerGmbh'])->name('stiegelmeyerGmbh.post');
Route::get('/stiegelmeyer-gmbh-&-co-kg-success',[FlatPagesController::class,'stiegelmeyerGmbh'])->name('stiegelmeyerGmbh.success');

Route::get('/intersystems-ebook',[FlatPagesController::class,'intersystemsEbook'])->name('intersystemsEbook');
Route::post("/intersystems-ebook-success",[FlatPagesController::class,'intersystemsEbook'])->name('intersystemsEbook.post');
Route::get("/intersystems-ebook-success",[FlatPagesController::class,'intersystemsEbook'])->name('intersystemsEbook.success');


Route::get('/uniphore-u-assist',[FlatPagesController::class,'uniphoreUAssist'])->name('uniphoreUAssist');
Route::post("/uniphore-u-assist-success",[FlatPagesController::class,'uniphoreUAssist'])->name('uniphoreUAssist.post');
Route::get("/uniphore-u-assist-success",[FlatPagesController::class,'uniphoreUAssist'])->name('uniphoreUAssist.success');
//Route::get('/uniphore-u-assist/success',[FlatPagesController::class,'uniphoreUAssistTest')->name('uniphoreUAssist.test');


Route::get('/siemens-mri-scanner-magnetom',[FlatPagesController::class,'eblastDeploymentAndLeadGeneration'])->name('eblastDeploymentAndLeadGeneration');
Route::post("/siemens-mri-scanner-magnetom-success",[FlatPagesController::class,'eblastDeploymentAndLeadGeneration'])->name('eblastDeploymentAndLeadGeneration.post');
Route::get("/siemens-mri-scanner-magnetom-success",[FlatPagesController::class,'eblastDeploymentAndLeadGeneration'])->name('eblastDeploymentAndLeadGeneration.success');

Route::get('/our-brand-hub',[FlatPagesController::class,'ourBrandHub']);
Route::post("/our-brand-hub-success",[FlatPagesController::class,'ourBrandHub'])->name('ourBrandHub.post');
Route::get("/our-brand-hub-success",[FlatPagesController::class,'ourBrandHub'])->name('ourBrandHub.success');


Route::get('/medlab-asia-&-asia-health-2023',[FlatPagesController::class,'medlabasiaAsiahealth2023']);
Route::post('/medlab-asia-&-asia-health-2023-success',[FlatPagesController::class,'medlabasiaAsiahealth2023'])->name('medlabasiaAsiahealth2023.post');
Route::get('/medlab-asia-&-asia-health-2023-success',[FlatPagesController::class,'medlabasiaAsiahealth2023'])->name('medlabasiaAsiahealth2023.success');

Route::get('/siemens-workforce-excellence-whitepaper',[FlatPagesController::class,'siemensworkforceexcellencewhitepaper']);
Route::post('/siemens-workforce-excellence-whitepaper-success',[FlatPagesController::class,'siemensworkforceexcellencewhitepaper'])->name('siemensworkforceexcellencewhitepaper.post');
Route::get('/siemens-workforce-excellence-whitepaper-success',[FlatPagesController::class,'siemensworkforceexcellencewhitepaper'])->name('siemensworkforceexcellencewhitepaper.success');

Route::get('/siemens-personalized-healthcare-trends-whitepaper',[FlatPagesController::class,'siemensPersonalizedHealthcareTrendsWhitepaper']);
Route::post('/siemens-personalized-healthcare-trends-whitepaper-success',[FlatPagesController::class,'siemensPersonalizedHealthcareTrendsWhitepaper'])->name('siemensPersonalizedHealthcareTrendsWhitepaper.post');
Route::get('/siemens-personalized-healthcare-trends-whitepaper-success',[FlatPagesController::class,'siemensPersonalizedHealthcareTrendsWhitepaper'])->name('siemensPersonalizedHealthcareTrendsWhitepaper.success');


Route::get('/troostwijk-zna-stuivenberg',[FlatPagesController::class,'troostwijkznastuivenberg']);
Route::post('/troostwijk-zna-stuivenberg-success',[FlatPagesController::class,'troostwijkznastuivenberg'])->name('troostwijkznastuivenberg.post');
Route::get('/troostwijk-zna-stuivenberg-success',[FlatPagesController::class,'troostwijkznastuivenberg'])->name('troostwijkznastuivenberg.success');

Route::get('/equinix-healthcare-solution-briefs',[FlatPagesController::class,'equinixHealthcareSolutionBriefs']);
Route::post('/equinix-healthcare-solution-briefs-success',[FlatPagesController::class,'equinixHealthcareSolutionBriefs'])->name('equinixHealthcareSolutionBriefs.post');
Route::get('/equinix-healthcare-solution-briefs-success',[FlatPagesController::class,'equinixHealthcareSolutionBriefs'])->name('equinixHealthcareSolutionBriefs.success');

Route::get('/equinix-healthcare-ai',[FlatPagesController::class,'equinixhealthcareai']);


});

Route::get('/healthcare-erp-transformation',[FlatPagesController::class,'healthcareErpTransformation']);
Route::post("/healthcare-erp-transformation-success",[FlatPagesController::class,'healthcareErpTransformation'])->name('healthcareErpTransformation.post');
Route::get("/healthcare-erp-transformation-success",[FlatPagesController::class,'healthcareErpTransformation'])->name('healthcareErpTransformation.success');

Route::get('/our-services',[FormController::class,'ourServices']);
Route::post('/our-services-success',[FormController::class,'ourServices'])->name('ourServices.post');
Route::get('/our-services-success',[FormController::class,'ourServices'])->name('ourServices.success');