@extends('admin.home')
@section('headTitle')
Page list
@endsection
@section('content')
<div class="container">
    <div class="row ">
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
                                <th >Title</th>
                                <th >Content</th>
                                <th >Image</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$page->title}}</td>
                                <td>{!! str_limit($page->content,50) !!}</td>
                                @if(!$page->image)
                                <td></td>
                                @else
                                <td><img height="50px" width="80px" src="{{asset('public/images/pages/'.$page->image)}}"></td>
                                @endif
                                <td>
                                    <a href="{{route('edit.page',['id'=>$page->id])}}" class="btn btn-success">Edit</a>
                                   <a href="{{route('delete.page',$page->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$pages->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






