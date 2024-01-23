@foreach($data as $val)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{ route('interviews.url',[$val->url])}}" title="{{$val->title_tag}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{{ $val->title}}</h3><br>
                      <i>{{ $val->name }},{{ $val->designation }}</i><br>
                      {!!$val->description!!}
                        </span>
                      </a>
                </div>
              </div>
            </div>   
            @endforeach