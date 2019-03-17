@extends('admin.home')
@section('headTitle')
Subjects
@endsection
@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3>Edit Subject</h3>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
                {{ Form::open(['route'=>'subject.update','method'=>'post','enctype'=>'multipart/form-data'])}}
                <div class="form-group row">
                    <div class="col-lg-3">

                        <label class="col-form-label">Subject(English)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" name="subject_english" value="{{$edit_subject->subject_english}}" class="form-control" required>
                        <input type="hidden" name="subject_id" value="{{$edit_subject->id}}" class="form-control">
                        @if ($errors->has('subject_english'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_english') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label">Subject(Bangla)</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" name="subject_bangla"value="{{$edit_subject->subject_bangla}}" class="form-control" required>
                        @if ($errors->has('subject_bangla'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_bangla') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label">Subject Code</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="number" name="subject_code"   value="{{$edit_subject->subject_code}}" class="form-control" required>
                        @if ($errors->has('subject_code'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_code') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-lg-3">
                        {{Form::label('text','Choose Class',['class'=>'col-form-label'])}}
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group mb-3"> 
                            @foreach($classess as $class)
                            <div class="input-group-prepend mb-2">
                                <div class="input-group-text">
                                    <input type="checkbox" name="class_id[]"
                                           {{ (in_array($class->id, explode(',',$edit_subject->class_id))) ? 'checked' : '' }}
                                    value="{{$class->id}}"  id="edit-class-{{$class->id}}" class="mr-2">
                                     <label class="form-check-label" for="edit-class-{{$class->id}}">{{$class->classNameEnglish}}</label> 
                                   
                                </div>
                            </div>  
                            @endforeach 
                            @if ($errors->has('class_id'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('class_id') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        {{Form::label('text','Choose Group',['class'=>'col-form-label'])}}
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group mb-3"> 
                            @foreach($groups as $group)
                            <div class="input-group-prepend mb-2">
                                <div class="input-group-text">
                                    <input type="checkbox" name="group_name[]"
                                           {{ (in_array($group->id, explode(',', $edit_subject->group_name))) ? 'checked' : '' }}
                                    value="{{$group->id}}"  class="mr-2">{{$group->groupName}} 
                                </div>
                            </div>  
                            @endforeach 
                            @if ($errors->has('group_name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('group_name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Short Description</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea class="ckeditor form-control"  rows="2" name="short_description">{{$edit_subject->short_description}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Description</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea class="ckeditor form-control"  rows="3" name="description">{{$edit_subject->description}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Description</label>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-check">
                            <input type="checkbox" name="religion_subject" {{$edit_subject->religion_subject==1?'checked':''}} class="form-check-input" value="1" id="religion_subject">
                            <label class="form-check-label" for="religion_subject">Religion Subject</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Not Effect Subject</label>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-check">
                            <input type="checkbox" name="not_effect" class="form-check-input {{$edit_subject->not_effect==1?'checked':''}}" value="1" id="edit_Not_effect">
                            <label class="form-check-label" for="edit_Not_effect">Not Effect</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                        {{Form::submit('Submit',['class'=>'btn  btn-success btn-lg mr-2'])}}
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
</div>
@endsection

