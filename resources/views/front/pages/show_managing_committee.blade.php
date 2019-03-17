@extends('front.home_v2')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="contact-form spad pb-0">
            <div class="section-title text-center">
                <h3>Member of Managing Committee</h3>
              <div class="row m-auto pt-5">
                @foreach($managing_committees as $managing_committee)
                 <div class="col-md-3 pt-5">
                   <img height="70px" width="90px" src="{{asset('public/images/managing_committee/'.$managing_committee->image)}}" alt="test" class="img-responsive">
                   <div class="image-description">
                       <hr style="border: none;height: 1px;color:red; background-color:green; ">
                       <h4 class="text-left">{{$managing_committee->name}}</h4>
                       <p class="text-left">{{$managing_committee->designation}}-({{$managing_committee->start_time}} - {{$managing_committee->end_time}})</p>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
        </div>
    </div>
</section>    
@endsection