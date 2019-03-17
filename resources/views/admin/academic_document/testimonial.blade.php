@extends('admin.home')
@section('headTitle')
Testimonial
@endsection
 @section('content')
 
 <div class="card">
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        {{Form::open(['route'=>'students.mark.add','method'=>'post'])}}
        <div class="row mb-5 m-auto">
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                        <input type="text" name="student_id"  class="form-control" placeholder="Student's ID" required="1">
                    @if ($errors->has('student_id'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('student_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-6 col-sm-2 col-md-2">
                <button class="btn btn-success " type="submit" >Submit</button>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>
 @endsection

