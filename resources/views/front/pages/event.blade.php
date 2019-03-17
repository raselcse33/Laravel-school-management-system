@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-5">
    <div class="container">
		<div class="row">  
		  <div class="col-md-12">
		  	 <div class="card">
               <div class="card-body bg-white">
					@foreach($events as $event)
						<div class="post-item">
							@if(!$event->image)
							@else
							 <img class="mt-1 pull-left mr-3" width="150px" height="100px" src="{{asset('public/images/posts/'.$event->image)}}">
							@endif
							  <div class="post-content mt-3">
								<h4><a class="text-dark" href="{{route('post.postDetails',['slug'=>$event->slug])}}"> {{$event->title}} </a></h4>
								<div class="post-meta">
									<span><i class="fa fa-calendar-o"></i>{{$event->dateTime}}</span>
									<span><i class="fa fa-calendar-o"></i>{{$event->type}}</span>
								</div>
								{!!str_limit($event->content,400)!!} <a href="{{route('post.postDetails',['slug'=>$event->slug])}}">Read more</a>
							 </div>
						</div>
					  @endforeach
					  {{$events->links()}}
				 </div>
		       </div>
	        </div>
		  </div>
		</div>
</section>    
@endsection