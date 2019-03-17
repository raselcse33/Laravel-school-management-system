@extends('admin.home')
@section('headTitle')
Students Id
@endsection
@section('content')
<div class="card">
    <div class="card-body">
        @if (Session::has('message'))
        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
        @endif
        <form action="" method="post">
            {{csrf_field()}}
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
                    <select class="form-control" name="group_id"required >
                        <option value="">Select Group Name</option>
                        @foreach($groupNames as $groupName)
                        <option value="{{$groupName->id}}">{{$groupName->groupName}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('group_id'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('group_id') }}</strong>
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
                    @if ($errors->has('section'))
                    <span class="text-danger">
                        <strong>{{ $errors->first('section') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="col-6 col-sm-2 col-md-2">
                <button class="btn btn-success " name="submit" type="submit" >Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
