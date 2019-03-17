@extends('front.home')
@section('content')
<section class="blog-page-section spad pt-0">
    <div class="container">
        <div class="contact-form spad pb-0">
            <div class="section-title text-center">
              @if (Session::has('message'))
             <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
              @endif
                <h3>Leave Application</h3>
                
            </div>
            <form class="comment-form" action="{{route('leave.application.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                         <small class="text-danger">{{ $errors->first('name') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <label>purpose</label>
                        <input type="text" name="purpose" class="form-control" placeholder="Your purpose" required>
                        <small class="text-danger">{{ $errors->first('purpose') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <label>Start Time</label>
                        <input style="padding: 17px;margin-bottom: 15px;" type="date" name="start_time" class="form-control" required>
                        <small class="text-danger">{{ $errors->first('start_time') }}</small>
                    </div>
                    <div class="col-lg-6">
                        <label>End Time</label>
                        <input style="padding: 17px;margin-bottom: 15px;" type="date" name="end_time" class="form-control" required>
                        <small class="text-danger">{{ $errors->first('end_time') }}</small>
                    </div>
                    <div class="col-lg-12">
                        <label>Leave Message</label>
                        <textarea placeholder="Message" name="message" class="form-control" required></textarea>
                        <small class="text-danger">{{ $errors->first('message') }}</small>
                        <div class="text-center">
                            <button class="site-btn" type="submit">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>    
@endsection