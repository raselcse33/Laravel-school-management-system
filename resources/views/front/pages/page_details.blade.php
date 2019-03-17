@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
      <div class="contact-form spad pb-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card m-auto">
                    <div class="card-body bg-white">
                      @if(!$page_details->image)
                     
                      @else
                      <img width="100%" height="500px" src="{{asset('public/images/pages/'.$page_details->image)}}">
                       @endif
                      <h3 class="text-center mt-3 mb-3">{{$page_details->title}}</h3>
                      {!!$page_details->content!!}
                 </div>
               </div>
            </div>
        </div>
      </div>
    </div>
</section>    
@endsection