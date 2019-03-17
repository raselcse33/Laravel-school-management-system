@extends('admin.home')
@section('headTitle')
Teachers
@endsection
@section('content')
<div class="container"
     <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Index Number</th>
                                <th scope="col">Title</th>
                                <th scope="col">email</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->id}}</td>
                                <td>{{$teacher->indexNumber}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->emailAddress}}</td>
                                <td><img src="{{asset('public/images/teachers/'.$teacher->image)}}" style="max-width:150px;min-height:100px;" alt="{{$teacher->name}}" width="100%"></td>
                                <td>
                                    <a href="{{route('teacher.edit',['id'=>$teacher->id])}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                    <a href="{{route('teacher.delete',$teacher->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$teachers->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection