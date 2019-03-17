@extends('admin.home')
@section('headTitle')
Gallery
@endsection
@section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'gallary.store','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Add New Gallery</h4>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="title" class="form-control" placeholder="Title" required>
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
                            <input type="file" name="image" class="form-control" required>
                            @if ($errors->has('image'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif
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
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h4>View Gallery </h4>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery as $gallery)
                                <tr>
                                    <td>{{$gallery->id}}</td>
                                    <td>{{$gallery->title}}</td>
                                    <td><img src="{{asset('public/images/gallery/'.$gallery->image)}}" alt="{{$gallery->title}}" width="100%"></td>
                                    <td>
                                    <a href="{{route('gallery.edit',$gallery->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('gallery.delete',$gallery->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm mt-2">Delete</a>
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
</div>

@endsection