@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="contact-form spad pb-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-auto">
                        <div class="card-body bg-white">
                            <h3 class="text-center pb-3">Notice</h3>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >Title</th>
                                        <th >Content</th>
                                        <th >Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    @endphp
                                    @foreach($event_notice as $notice)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$notice->title}}</td>
                                        <td>{!!str_limit($notice->content,200)!!}<a href="{{route('post.postDetails',['slug'=>$notice->slug])}}">Read more</a></td>
                                        <td><img height="80px" width="200px" src="{{asset('public/images/posts/'.$notice->image)}}"></td>
                                    </tr>
                                    @php
                                    $i++;
                                    @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            {{$event_notice->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection