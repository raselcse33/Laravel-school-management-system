@extends('admin.home')
@section('headTitle')
Edit Gallery
@endsection
@section('content')

  <div class="row grid-margin">
      <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'gallary.update','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Edit Gallery</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="title" class=" form-control" value="{{$gallery_edit->title}}" required>
                            <input type="hidden" name="galleryId" class=" form-control" value="{{$gallery_edit->id}}">
                            @if ($errors->has('title'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Image</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" name="image" class="mb-4 form-control" >
                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
                            <img src="{{asset('public/images/gallery/'.$gallery_edit->image)}}" width="250" height="120"/>
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