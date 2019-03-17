@extends('admin.home')
@section('headTitle')
Edit Successful Student
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                   {{--  {{ Form::open(['route'=>'slider.update','method'=>'post','enctype'=>'multipart/form-data'])}} --}}
                   <form action="{{route('successful_student.update',['id'=>$successful_student->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h4>Edit Successful Student</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="name" class="form-control" value="{{$successful_student->name}}" required>
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Letter Point</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="letter_grade" class="form-control" value="{{$successful_student->letter_grade}}" required>
                            @if ($errors->has('letter_grade'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('letter_grade') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Grade Point</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" step="any" name="grade_point" class="form-control" value="{{number_format($successful_student->grade_point,2)}}"
                             required>
                            @if ($errors->has('grade_point'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('grade_point') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">year</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="year" class="form-control" value="{{$successful_student->year}}" required>
                            @if ($errors->has('year'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('year') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Image</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" name="image"  class="form-control mb-3">
                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                            <img src="{{asset('public/images/successful_student/'.$successful_student->image)}}" width="250" height="120">
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            {{Form::submit('Submit',['class'=>'btn btn-success mr-2'])}}
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  </div>
 @endsection

