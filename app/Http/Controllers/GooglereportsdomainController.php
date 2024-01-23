<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;
use Carbon\Carbon;
use App\CompanyProfile;
use PhpOffice\PhpWord\Shared\Converter;
use App\Networkdomain;
use Config;

class GooglereportsdomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $filter = 'ga:pagePath=~/linkedin-offer';
        $analyticsData = Analytics::performQuery(
         Period::years(1),
            'ga:sessions',
            [
                'metrics' => 'ga:sessions,ga:pageviews,ga:bounces,ga:newUsers',
                'dimensions' => 'ga:yearMonth,ga:pageTitle,ga:pagePath',
                'filters' =>$filter
            ]
   
);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



     public function domainreport(){
      //Config::set("database.connections.mysql2");
      
      return view('analytics.domain',compact('tracklinks'));
    }

    public function store(Request $request)
    {
        //dd($request);
    
            $siteurl=$request->input('siteurl');
           
            $startdate=Carbon::parse($request->input('startdate'));
            $enddate=Carbon::parse($request->input('enddate'));
            $date1=date_create($startdate);
            $date2=date_create($enddate);
            $diff=date_diff($date1,$date2);
            $diff->format("%R%a days");
            $period=$diff->format("%a days");
           
           
            $filter = 'ga:pagePath=~/'.$siteurl;
         
            //$maxResults=10000;
            

           $New_return_users_data = Analytics::performQuery(
                     Period::create($startdate,$enddate),
                  'ga:sessions',
                  [
                     
                      'dimensions' =>'ga:networkDomain,ga:networkLocation,ga:date,ga:country,ga:city,ga:region',
                      'filters' =>$filter
                      
                      
                  ]
             
                  ); 
          

            dd($New_return_users_data);
        
        Config::set("database.connections.mysql3", [
            "driver" => "mysql",
            "host" => "127.0.0.1",
            "port" =>"3306",
            "database" =>"ochremed_leadforensics",
            "username" =>"ochremed_globdb",
            "password" =>"~xG({nf&s&*{",
   
        ]);

        $db_ext = \DB::connection('mysql3');
        
// dd($New_return_users_data->count());
           foreach ($New_return_users_data as $value) {

          $db_ext->table('networkdomains')->insert(
                  ['network_domains' => $value[0],
                   'network_location' => $value[1],
                   'date'=>$value[2],
                   'country'=>$value[3],
                   'city'=>$value[4],
                   'region'=>$value[5],
                   'type'=>"plantautomation",]
             );                         

      
           
           
           }
         
           //dd($New_return_users_data);

        
   

       
        return "completed";
         //return View('googlereports.show', compact('objWriter'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    
}
