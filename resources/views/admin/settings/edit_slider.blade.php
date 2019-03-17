@extends('admin.home')
@section('headTitle')
Edit Slider
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'slider.update','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Add New Slider</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="title" class="form-control" value="{{$slider_edit->title}}" required>
                            <input type="hidden" name="sliderId" class="form-control" value="{{$slider_edit->id}}" required>
                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Sub Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="sub_title" class="form-control" value="{{$slider_edit->sub_title}}" >
                            @if ($errors->has('sub_title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('sub_title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Content</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="ckeditor form-control" name="content" rows="3">{{$slider_edit->content}}</textarea>
                            @if ($errors->has('content'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('content') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Image</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" name="slider"  class="form-control mb-3">
                            @if ($errors->has('slider'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('slider') }}</strong>
                            </span>
                            @endif
                            <img src="{{asset('public/images/sliders/'.$slider_edit->slider)}}" width="250" height="120">
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
  </div>
 @endsection

