@extends('admin.home')
@section('headTitle')
Page list
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Page list</h3>
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{!! str_limit($post->content,50) !!}</td>
                                @if(!$post->image)
                                <td></td>
                                @else
                                <td><img height="50px" width="80px" src="{{asset('public/images/posts/'.$post->image)}}"></td>
                                @endif
                                <td>
                                    <a href="{{route('edit.post',['id'=>$post->id])}}" class="btn btn-success mb-1">Edit</a>
                                    <a href="{{route('delete.post',$post->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$posts->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






