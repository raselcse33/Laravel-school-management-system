@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
      <div class="contact-form spad pb-0">
        <div class="row">
            <div class="col-md-8">
                    <div class="card-body bg-white">
                      <h3 class="text-left mb-3">{{$exam_routine->title}}</h3>
                      <table class="table class-routine">
                          <thead>
                            <tr>
                              <th scope="col">title</th>
                              <th scope="col">Download</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach($exam_routines as $exam_routine)
                            <tr>
                              
                              <td>{{$exam_routine->title}}</td>
                              <td><a href="{{asset('public/images/exam_routine/'.$exam_routine->image)}}">Click Here</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                 </div>
            </div>
        </div>
      </div>
    </div>
</section>    
@endsection