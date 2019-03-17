@extends('admin.home')
@section('headTitle')
Add successful Student
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'successful_student.store','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Add successful Student</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Name</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Letter Grade</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="letter_grade" class="form-control" placeholder="Letter Grade" required >
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
                            <input type="number" step="any" name="grade_point" class="form-control" placeholder="Grade Point" required>
                            @if ($errors->has('grade_point'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('grade_point') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Year</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="year" class="form-control" placeholder="Year" required>
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
                            <input type="file" name="image" class="form-control" required>
                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            {{Form::submit('Submit',['class'=>'btn btn-success mr-2'])}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4>View Successful Student </h4>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Letter Grade</th>
                                    <th scope="col">Grade Point</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($successful_students as $successful_student)
                                <tr>
                                    <td>1</td>
                                    <td>{{$successful_student->name}}</td>
                                    <td>{{$successful_student->letter_grade}}</td>
                                     <td>{{number_format($successful_student->grade_point,2)}}</td>
                                     <td>{{$successful_student->year}}</td>
                                    <td>
                                        <a href="{{route('successful_student.edit',$successful_student->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                        <a href="{{route('successful_student.delete',$successful_student->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
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

@endsection