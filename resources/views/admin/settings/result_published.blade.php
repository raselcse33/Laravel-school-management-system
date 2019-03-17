@extends('admin.home')
@section('headTitle')
Result Published Date
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'result_published.store','method'=>'post'])}}
                    <div class="form-group">
                        <h4>Result Published Date</h4>
                    </div>
                    

                     <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Class Name</label>
                        </div>
                        <div class="col-lg-8">
                         @foreach($classNames as $className)
                           <div class=" form-check form-check-inline">
                            <input class="form-check-input" name="classNameId[]" type="checkbox" value="{{$className->id}}" style="line-height:42px;">
                            <label class="form-radio-label mt-2 ">{{$className->classNameEnglish}}</label>
                          </div>
                          @endforeach
                          <br>
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

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Published Date</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="date" name="date" class="form-control" placeholder="Published Date" required >
                            @if ($errors->has('date'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('date') }}</strong>
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
                    <h4>View Result Published Date </h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">class Name</th>
                                <th scope="col">Semister Name</th> 
                                <th scope="col">Exam Year</th> 
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=0;
                            @endphp
                            @foreach ($result_publisheds as $result_published)
                            @php
                            $i++;
                            @endphp
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$result_published->classNameEnglish}}</td>
                                 <td>{{$result_published->examName}}</td>
                                <td>{{$result_published->examYear}}</td>
                                  <td>{{$result_published->date}}</td>
                                <td>
                                    <a href="{{route('result_published.edit',$result_published->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('result_published.delete',$result_published->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
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