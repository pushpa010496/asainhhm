@foreach($data as $healthcareinfo)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{url(Request::segment(count(Request::segments())) .'/'. $healthcareinfo->url)}}" title="{{$healthcareinfo->title}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{{$healthcareinfo->title}}</h3><br>
                      @if($healthcareinfo->sub_title != null)
                      <i>{{$healthcareinfo->sub_title}}</i><br>
                      @endif
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($healthcareinfo->short_description)))),$limit = 350, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>
@endforeach



 



