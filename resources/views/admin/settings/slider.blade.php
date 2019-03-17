@extends('admin.home')
@section('headTitle')
Slider
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'slider.store','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Add New Slider</h4>
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
                            <label class="col-form-label">Sub Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="sub_title" class="form-control" placeholder="subtitle" >
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
                            <textarea class="form-control" name="content" rows="3"></textarea>
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
                            <input type="file" name="slider" class="form-control" required>
                            @if ($errors->has('slider'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('slider') }}</strong>
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
                    <h4>View Slider </h4>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Sub Title</th>
                                    <th scope="col">Slide Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{$slider->id}}</td>
                                    <td>{{$slider->title}}</td>
                                     <td>{{$slider->sub_title}}</td>
                                    <td><img src="{{asset('public/images/sliders/'.$slider->slider)}}" alt="" width="100%"></td>
                                    <td>
                                        <a href="{{route('slider.edit',$slider->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                        <a href="{{route('slider.delete',$slider->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm mt-2">Delete</a>
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