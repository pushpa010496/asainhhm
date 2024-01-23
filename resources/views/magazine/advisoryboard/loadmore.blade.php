@foreach($data as $val)
          <div class="webinar-card ahhm-advisory-board-screen">
            <img src="{{ config('app.url').'advisoryboard/'.$val->image}}" title="{{ $val->title_tag }}" alt="{{ $val->title }}" class="advisory-board-mem" >
            <div class="card">
              <div class="card-body mt-0">
                  <span class="card-text">
                    <h3 class="card-title">{{ $val->title }}</h3><br>
                    <p class="mb-0"><i>{!! $val->home_description !!}</i></p><br>
                    <p class="mb-0">{!!$val->description!!}</p>
                  </span>
              </div>
            </div>
          </div>
        @endforeach