@extends('admin.home')
@section('headTitle')
Join Marks
@endsection
@section('content')
<div class="row m">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <h3>Add New Join Marks </h3>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
                {{ Form::open(['route'=>'join.marks.create','method'=>'post','enctype'=>'multipart/form-data'])}}
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label" for="first-subject">First Subject <span class="text-danger">*</span> </label>
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control" name="first_subject" id="first-subject" required >
                            <option value="">Select First Subject</option>
                            @foreach($subjectsName as $subjectName)
                            <option value="{{$subjectName->id}}">{{$subjectName->subject_english}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('first_subject'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('first_subject') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label" for="second-subject">Second Subject <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-lg-8">
                        <select class="form-control" name="second_subject" id="second-subject" required >
                            <option value="">Select Second Subject</option>
                            @foreach($subjectsName as $subjectName)
                            <option value="{{$subjectName->id}}">{{$subjectName->subject_english}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('second_subject'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('second_subject') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label" for="new-subject">New Subject <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text"  id="new-subject" name="new_subject" class="form-control" required>
                        @if ($errors->has('new_subject'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('new_subject') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label" for="className" >Class Name <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group mb-3"> 
                            @foreach($classessName as $className)
                            <div class="input-group-prepend mb-2">
                                <div class="input-group-text">
                                    <input type="checkbox" name="class_name_id[]" value="{{$className->id}}" 
                                       id="className"    class="mr-2">{{$className->classNameEnglish}} 
                                </div>
                            </div>
                            @endforeach
                            @if ($errors->has('class_name_id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('class_name_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                        {{Form::submit('Submit ',['class'=>'btn btn-success mr-2'])}}
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection