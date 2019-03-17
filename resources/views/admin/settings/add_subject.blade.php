@extends('admin.home')
@section('headTitle')
Subjects
@endsection
@section('content')
<div class="row m">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h3>Add New Subject</h3>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif
                {{ Form::open(['route'=>'subject.create','method'=>'post','enctype'=>'multipart/form-data'])}}
                <div class="form-group row">
                    <div class="col-lg-3">

                        <label class="col-form-label">Subject(English)*</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" name="subject_english" class="form-control" required>
                        @if ($errors->has('subject_english'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_english') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label">Subject(Bangla)*</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" name="subject_bangla" class="form-control" required>
                        @if ($errors->has('subject_bangla'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_bangla') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label class="col-form-label">Subject Code*</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="number" name="subject_code" class="form-control" required>
                        @if ($errors->has('subject_code'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('subject_code') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        {{Form::label('text','Class*',['class'=>'col-form-label'])}}
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group mb-3"> 
                            @foreach($classess as $class)
                            <div class="input-group-prepend mb-2">
                                <div class="input-group-text">
                                    <input type="checkbox" name="class_id[]" value="{{$class->id}}" class="mr-2" id="class-{{$class->id}}">
                                    <label class="form-check-label" for="class-{{$class->id}}">{{$class->classNameEnglish}}</label> 
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
                        {{Form::label('text','Group*',['class'=>'col-form-label'])}}
                    </div>
                    <div class="col-lg-8">
                        <div class="input-group mb-3"> 
                            @foreach($groups as $group)
                            <div class="input-group-prepend mb-2">
                                <div class="input-group-text">
                                    <input type="checkbox" name="group_name[]" value="{{$group->id}}" class="mr-2" id="group-{{$group->id}}">
                                    <label class="form-check-label" for="group-{{$group->id}}">{{$group->groupName}}</label> 
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
                        <label>Summary</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea class="form-control"  rows="2" name="summary"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Description</label>
                    </div>
                    <div class="col-lg-8">
                        <textarea class="form-control"  rows="2" name="description"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-lg-3">
                        <label>Religious Subject</label>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-check">
                            <input type="checkbox" name="religion_subject" class="form-check-input" value="1" id="religion_subject">
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
                            <input type="checkbox" name="not_effect" class="form-check-input" value="1" id="not_effect">
                            <label class="form-check-label" for="not_effect">Not Effect</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-8">
                        {{Form::submit('Submit',['class'=>'btn btn-success btn-lg mr-2'])}}
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                <h3>All Subjects</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Subject Code</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                        <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->subject_english }}</td>
                            <td>{{ $subject->subject_code }}</td>
                            <td>
                                <a href="{{route('subject.edit',$subject->id)}}" class="btn btn-success">Edit</a>
                                 <a href="{{route('subject.delete',$subject->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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
@endsection