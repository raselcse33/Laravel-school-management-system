@extends('admin.home')
@section('headTitle')
Class Routine
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <h3>Add New Class Routine</h3>
                    <form action="{{route('routine.store')}}" method="post" class="form-row" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title"  name="title"  required>
                            <span class="text-danger">
                                <strong> {{ $errors->first('title') }}</strong>
                            </span>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image"  name="image" required="1">
                            <span class="text-danger">
                                <strong> {{ $errors->first('image') }}</strong>
                            </span>
                        </div>
                        <div class="form-group mt-4 col-sm-3">
                            <button type="submit" class="btn btn-success btn-lg mt-1 form-control">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h3>All Group</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Routine</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($routine as $routine)
                            <tr>
                                <td>{{$routine->title}}</td>
                                <td><a href="{{asset('public/images/routine/'.$routine->image)}}" style="color:#0061F6;text-decoration: none;">View Routine</a></td>
                                     <td>
                                    <a href="{{route('routine.edit',$routine->id)}}" class="btn btn-success">edit</a>
                                    <a href="{{route('routine.delete',$routine->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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
</section>
@endsection