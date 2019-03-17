@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
      <div class="contact-form spad pb-0">
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card m-auto">
                    <div class="card-body bg-white">
                      <h3 class="text-center mt-3 mb-3">{{$post_details->title}}</h3>
                      @if(!$post_details->image)
                     
                      @else
                      <img class="mb-3" width="100%" height="500px" src="{{asset('public/images/posts/'.$post_details->image)}}">
                       @endif
                      {!!$post_details->content!!}
                 </div>
               </div>
            </div>
             <div class="col-md-1"></div>
        </div>
      </div>
    </div>
</section>    
@endsection