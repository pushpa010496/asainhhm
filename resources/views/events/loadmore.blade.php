@php
                     $tempmonth = '';
                  @endphp
    @foreach($data as $val)
    @php $dd=date('F Y', strtotime($val -> start_date)); @endphp
                    @if($tempmonth !=$dd)
                  
                      <h2 class="text-uppercase PF-BrdrBbbbdc2 pb-1 PF-TXTRED">{{ $dd }}<span class="PF-IntigerStyle"></span></h2>
                      @php $tempmonth = $dd;  @endphp
                    @endif
    <div class="month-category scroll-margin-offset may" id="may">
 
        <!-- <h2 class="mt-5">{{ date('M', strtotime($val->start_date))}}</h2> -->
        <a href="{{$val->web_link}}" target="_blank" class="event-click">
          <div class="date">
            <span class="from">{{ date('d', strtotime($val->start_date))}}</span>
            <span class="timeline"></span>
            <span class="to">{{ date('d', strtotime($val->end_date))}}</span>
          </div>
          <div class="card event-card">
            <div class="card-body mt-0">
                <span class="card-text">
                  <h3 class="card-title hyperlink">{{ $val->title }}</h3>
                  <p class="position-relative">
                    <i>{{$val->email}}</i>
                    <span class="copy"></span>
                    </p>
                  <p>{{$val->web_link}}</p>
                  <p><img src="{{config('app.url')}}images/location-pin-black.svg" class="location" alt="location-icon">{{$val->venue}}</p>
                </span>
            </div>
          </div>
        </a>
    
    </div>
@endforeach