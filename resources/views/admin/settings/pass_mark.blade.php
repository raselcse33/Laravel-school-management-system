@extends('admin.home')
@section('headTitle')
PassMark
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'pass_mark.store','method'=>'post'])}}
                    <div class="form-group">
                        <h4>Add New PassMark</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Percentage-(%)</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="number" name="percentage" class="form-control" placeholder="Percentage" required >
                            @if ($errors->has('percentage'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('percentage') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                     <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Class Name</label>
                        </div>
                        <div class="col-lg-8">
                            <select class="form-control" name="classNameId" id="className" required>
                                <option value="">Select Class Name</option>
                                @foreach($classNames as $className)
                                <option value="{{$className->id}}">{{$className->classNameEnglish}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('classNameId'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameId') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Semester</label>
                        </div>
                        <div class="col-lg-8">
                        <select class="form-control" name="semisterId" required>
                            <option value="">Choose Semester</option>
                            @foreach($exams as $exam)
                            <option value="{{$exam->id}}">{{$exam->examName}} </option>
                            @endforeach
                        </select>
                        @if($errors->has('semisterId'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('semisterId') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Year</label>
                        </div>
                        <div class="col-lg-8">
                           <select class="form-control" name="examYear" required>
                            <option value="">Choose Year</option>
                            @for($i=date('Y'); $i >= 2017; --$i)
                            <option 
                                {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                                value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                         @if($errors->has('examYear'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('examYear') }}</strong>
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
                    <h4>View PassMark </h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">percentage</th>
                                <th scope="col">class Name</th>
                                <th scope="col">Semister Name</th> 
                                <th scope="col">Exam Year</th> 
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($pass_marks as $pass_mark)
                            @php
                            $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$pass_mark->percentage}}</td>
                                <td>{{$pass_mark->classNameEnglish}}</td>
                                 <td>{{$pass_mark->examName}}</td>
                                <td>{{$pass_mark->examYear}}</td>
                                <td>
                                    <a href="{{route('pass_mark.edit',$pass_mark->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('pass_mark.delete',$pass_mark->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm ">Delete</a>
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