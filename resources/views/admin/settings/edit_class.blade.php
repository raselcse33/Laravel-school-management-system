@extends('admin.home')
@section('headTitle')
Update Class 
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <h3 class="card-title">Update Class</h3>
                    </div>
                    
                    {{ Form::open(['route'=>'update.class','method'=>'post','enctype'=>'multipart/form-data'])}}
                    
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Class Name(English)</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="classNameEnglish" value="{{$editClass->classNameEnglish}}" class="form-control" required>
                            <input type="hidden" name="classNameId" value="{{$editClass->id}}" class="form-control">
                            @if ($errors->has('classNameEnglish'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameEnglish') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">

                            <label class="col-form-label">Class Name(Bangla)</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="classNameBangla" value="{{$editClass->classNameBangla}}" class="form-control" required>
                            @if ($errors->has('classNameBangla'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameBangla') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            {{Form::submit('Update Class',['class'=>'btn btn-success mr-2'])}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
</section>
 @endsection
