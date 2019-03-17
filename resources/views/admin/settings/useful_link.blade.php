@extends('admin.home')
@section('headTitle')
Useful Links
@endsection
 @section('content')

  <div class="row grid-margin">
      <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'useful_link.store','method'=>'post','enctype'=>'multipart/form-data'])}}
                    <div class="form-group">
                        <h4>Add New Useful Links</h4>
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
                            <label class="col-form-label">Link</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="link" class="form-control" placeholder="Useful Link" required>
                            @if ($errors->has('link'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('link') }}</strong>
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
                    <h4>View Useful Links </h4>
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Links</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i=0;
                                @endphp
                                @foreach ($useful_links as $useful_link)
                                @php
                                $i++;
                                @endphp
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$useful_link->title}}</td>
                                    <td>{{$useful_link->link}}</td>
                                    
                                    <td>
                                        <a href="{{route('useful_link.edit',$useful_link->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                        <a href="{{route('useful_link.delete',$useful_link->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm ">Delete</a>
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