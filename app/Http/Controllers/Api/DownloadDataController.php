<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use Carbon\Carbon;
use App\Models\Flatpage;
use App\Models\Download;
use App\Models\Subscriber;
use App\Models\MagazineSubscribe;
class DownloadDataController extends Controller
{

    public function DownloadData()
    {
        
        $types = ['mediapack', 'Advertise', 'editorial-calender'];
        
        $typeCounts = [];
        $typeCountsOurservices = [];
        $typeCountsSubscriber = [];
        $typeCountsMagazineSubscriber = [];
        foreach ($types as $type) {
            $totalCount = Download::where('type', $type)->count();
            
            $last30DaysCount = Download::where('type', $type)
                ->where('created_at', '>=', Carbon::now()->subDays(30))
                ->count();
        
            $typeCounts[$type] = [
                'totalCount' => $totalCount,
                'last30DaysCount' => $last30DaysCount,
            ];
        }
        $ourservicesCountTotal = Flatpage::where('type', 'Our Services Page')->count();
        $ourservicesCountRecent = Flatpage::where('type', 'Our Services Page')->where('created_at', '>=', Carbon::now()->subDays(30))
        ->count();
        $typeCountsOurservices['Our Services Page'] =[
            'totalCount' => $ourservicesCountTotal,
                'last30DaysCount' => $ourservicesCountRecent,
        ];

        $subscribeCountTotal = Subscriber::where('type', 'e-newsletter-subscribe')->count();
        $subscribeCountRecent = Subscriber::where('type', 'e-newsletter-subscribe')->where('created_at', '>=', Carbon::now()->subDays(30))
        ->count();
        $typeCountsSubscriber['e-newsletter-subscribe'] =[
            'totalCount' => $subscribeCountTotal,
                'last30DaysCount' => $subscribeCountRecent,
        ];

        $magazineSubscribeCountTotal = MagazineSubscribe::where('type', 'Magazine-subscribe')->count();
         $magazineSubscribeCountRecent = MagazineSubscribe::where('type', 'Magazine-subscribe')->where('created_at', '>=', Carbon::now()->subDays(30))
        ->count();
        $typeCountsMagazineSubscriber['Magazine-subscribe'] =[
            'totalCount' => $magazineSubscribeCountTotal,
                'last30DaysCount' => $magazineSubscribeCountRecent,
        ];

        $data = [
            'data1' => $typeCounts,
            'data2' => $typeCountsOurservices,
            'data3' => $typeCountsSubscriber,
            'data4' => $typeCountsMagazineSubscriber,
        ];
     
        return response()->json($data);
        
    }
    
}