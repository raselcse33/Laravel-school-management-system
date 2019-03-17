@extends('admin.home')
@section('headTitle')
Edit Students Attendance
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        {{Form::open(['route'=>'students.attendance.edit','method'=>'post'])}}
        <div class="row mb-5">
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                    <select class="form-control" name="class_id"required >
                        <option value="">Select Class Name</option>
                        @foreach($classNames as $className)
                        <option value="{{$className->id}}">{{$className->classNameEnglish}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('class_id'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('class_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                    <select class="form-control" name="section_id"required >
                        <option value="">Select Section Name</option>
                        @foreach($sections as $section)
                        <option value="{{$section->id}}">{{$section->section}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('section_id'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('section_id') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-8 col-sm-3 col-md-3">
                <div class="form-group ">
                    <input type="date" name="date" class="form-control">
                    @if ($errors->has('date'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('date') }}</strong>
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
