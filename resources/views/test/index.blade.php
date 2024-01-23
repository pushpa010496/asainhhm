@extends('../layouts/app')
@section('style')

@endsection

@section('content')  

  @php
   require_once '/usr/local/share/GeoIP/vendor/autoload.php';

use GeoIp2\Database\Reader;

$ip_address = $_SERVER['REMOTE_ADDR'];

$reader = new Reader('/usr/local/share/GeoIP/GeoLite2-Country.mmdb');
$record = $reader->country($ip_address);

$country = $record->country->name;
$countrycode = $record->country->isoCode;

echo "IP Address: " . $ip_address . "<br>";
echo "Country: " . $country . "<br>";
echo "Country Code: " . $countrycode . "<br>";
 
    @endphp
  <div>
  Country: {{$country}};
  </div>
   <div>
  Country Code: {{$countrycode}};
  </div>
 

@endsection

@section('scripts')

@php
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        $country = geoip_country_name_by_name($ip_address);
    } else {
        
       $ip_address = "1.7.255.255";
        $country = 'India';
    }
    @endphp
    
      <div>
  Country: {{$country}};
  </div>
  

@endsection

  