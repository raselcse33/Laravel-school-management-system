@extends('admin.home')
@section('headTitle')
Mark
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        {{Form::open(['route'=>'students.mark.add','method'=>'post'])}}
        <div class="row mb-5">
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                    <select class="form-control" name="classNameId" id="className" required >
                        <option value="">Select Class Name</option>
                        @foreach($classNames as $className)
                        <option value="{{$className->id}}">{{$className->classNameEnglish}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('classNameId'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('classNameId') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                    <select class="form-control" name="subject_code" id="className" required >
                        <option value="">Select Subject Name</option>
                        @foreach($subjects as $subject)
                        <option value="{{$subject->subject_code}}">{{$subject->subject_english}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('subject_code'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('subject_code') }}</strong>
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
