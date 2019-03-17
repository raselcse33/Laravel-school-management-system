@extends('admin.home')
@section('headTitle')
Edit Mark
@endsection
@section('content')
{{Form::open(['route'=>'students.mark.view','method'=>'post'])}}
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>

                @endif
                <div class="row mb-5">
                    <div class="col-2 col-sm-2 col-md-3">
                        <div class="form-group ">
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
                    <div class="form-group col-2 col-sm-2 col-md-3">
                        <select class="form-control" name="semisterId" required>
                            <option value="">Choose Semester</option>
                            @foreach($exams as $exam)
                            <option value="{{$exam->id}}">{{$exam->examName}} </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2 col-sm-2 col-md-3">
                        <div class="form-group ">
                            {{Form::open(['route'=>'students.mark.add','method'=>'post','class'=>'form-row'])}}
                            <select class="form-control" name="subject_code" id="className" required>
                                <option value="">Select Subject</option>
                                @foreach($subjects as $subject)
                                <option value="{{$subject->subject_code}}">{{$subject->subject_english}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('subjectId'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('subjectId') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group col-2 col-sm-2 col-md-3">
                        <select class="form-control" name="examYear" required>
                            <option value="">Choose Year</option>
                            @for($i=date('Y'); $i >= 2017; --$i)
                            <option 
                                {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                                value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-2 ">
                        <button class="btn btn-success " type="submit" >Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
{{Form::close()}}
@endsection


