@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
      <div class="contact-form spad pb-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card m-auto">
                    <div class="card-body bg-white">
                      <h3 class="text-center mb-2">Academic  Calender</h3>
                      <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">Date</th>
                              <th scope="col">Content</th>
                              <th scope="col">Download</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach( $academics as $academic)
                            <tr>
                              <td>{{$academic->calender_date}}</td>
                              <td>{!!$academic->title!!}</td>
                              <td><a href="{{asset('public/images/academic_calender/'.$academic->image)}}">Click Here</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                 </div>
               </div>
            </div>
        </div>
      </div>
    </div>
</section>    
@endsection