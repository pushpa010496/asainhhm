@foreach($data as $val)
 
 <div class="month-category scroll-margin-offset mt-4" id="may">

	 <!-- <h2 class="mt-5">May</h2> -->

	 <div class="col-12">

	   <div class="card pb-3">

		 <div class="card-body mt-4">

		   <a href="{{ route('news.url',[$val->url])}}" title="{{$val->title_tag}}">

			 <span class="card-text">

			   <h3 class="card-title hyperlink">{{ $val->title}}</h3>

			   <span class="date"><img src="{{config('app.url')}}images/calendar.svg" class="calendar">{{ date('l, F d, Y ', strtotime($val->date)) }}</span>

			   {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->home_description)))),$limit = 250, $end = '...') }}

				 </span>

			   </a>


		 </div>

	   </div>

	 </div>
 </div>

@endforeach



