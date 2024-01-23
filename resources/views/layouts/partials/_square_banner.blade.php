@php
 $page_id =  getpage(Request::segment(1));
  $current_issue  = \App\Models\Issue::where('active_flag', 1)->orderBy('id','desc')->first();   
 $ebook = \App\Models\Ebook::where('issue_id', $current_issue->id)->where('active_flag', 1)->first();
        if(empty($ebook)){
         $alt_issue = \App\Models\Issue::where('active_flag', 1)->where('id', '!=',$current_issue->id)->orderBy('id','desc')->first();    
         $ebook = \App\Models\Ebook::where('issue_id',$alt_issue->id)->where('active_flag', 1)->first();          
        }
     @endphp
   <!-- Prime Banner -->
   <!-- for inner pages -->
@if($page_id !='1')
<div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-LatestMagzBG mb-3 pt-4">
    <a href="https://www.asianhhm.com/latest-ebook" target="_blank">
      <img src="https://industry.asianhhm.com/promotions/images/adv-side-banner.jpg" alt="Latest Issue" title="Latest Issue" class="img-fluid border">
    </a>
  </div>
     

 <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-LatestMagzBG mb-3 pt-4 ahhm-latest-ebook">
 
    <a href="https://demo.asianhhm.com/latest-ebook" target="_blank">
      <img src="{{ config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->image_sm }}" alt="Latest Issue" title="Latest Issue" width="140" class="img-fluid border">
    </a>
   
   <h5 class="text-white font-weight-bold">Get instant <br>access to our latest e-book</h5>   
  </div>    -->
@endif
 
  <!-- <a href="javascript:void(0)" id="sanofi" onclick="trackOutboundLink('https://track.asianhhm.com/202111230844461124012864/'); return false;" target="_blank" class="mb-3" title="Sanofi"><img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/sanofi.jpg" alt="Sanofi" /></a> -->
  @foreach($banners as $k=>$banner)   
       @foreach($banner->pagesCount as $j=>$pcount)
       @php
       @endphp
         @if($banner->positions[0]->id == 6 && $pcount->id == $page_id)
         <a href="javascript:void(0)" onclick="trackOutboundLink('{{$banner->url}}'); return false;" target="_blank" class="mb-3" title="{{$banner->title}}">
         <img class="img-fluid div-shadow mb-3" src="{{config('app.url')}}ensign/{{$banner->image}}" alt="{{$banner->img_alt}}" title="{{$banner->img_title}}" /></a>
         @else
         @endif 
       @endforeach
 @endforeach 
 {{-- End Square banner --}}
 {{-- Sky tower banner --}}
      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 2 and $pcount->id == 1)
      <div class="mt-3">
        @if($homebanner12->type == 'script')
        {!! $homebanner12->script !!}
        @else
        <a href="{{$homebanner12->url}}" target="_blank" title="{{$homebanner12->title}}">
          <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
        </a>
        @endif
      </div>
      @else
      @endif  
      @endforeach
      @endforeach
      {{-- End Sky tower banner --}}