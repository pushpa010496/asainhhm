@foreach($data as $val)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{ route('healthcare-reports.url',[$val->url])}}" title="{{$val->title_tag}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{!! $val->title1 !!}</h3><br>
                      <!-- <i>HOW TO IMPROVE YOUR MENTAL HEALTH WHILE SITTING AT THE WORKPLACE</i><br> -->
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>   

            @endforeach