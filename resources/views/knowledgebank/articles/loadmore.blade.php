@foreach($data as $val)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{ route('articles.url',[$val->url])}}" title="{{$val->title_tag}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{{ $val->title}}</h3><br>
                      @if( $val->sub_title!= null )
                      <i>{{ $val->sub_title }}</i><br>
                      @endif
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>   
            @endforeach