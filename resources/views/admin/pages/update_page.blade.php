@extends('admin.home')
@section('headTitle')
Page
@endsection
@section('content')
<div class="container">
    <div class="row"> 
        <div class="card m-auto">
            <div class="card-body">
                <form action="{{route('update.page',['id'=>$page->id])}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h3>Add New Page</h3>
                    </div>

                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$page->title}}" required="1">
                        <small class="text-danger">{{ $errors->first('title') }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Slug">Summary</label>
                        <textarea class="ckeditor"  name="summary" required="1">{{$page->summary}}</textarea>
                        <small class="text-danger">{{ $errors->first('summary') }}</small>
                    </div>
                    <div class="form-group">
                        <label for="Title">Content</label>
                        <textarea class="ckeditor"  name="content" required="1">{{$page->content}}</textarea>
                        <small class="text-danger">{{ $errors->first('content') }}</small>
                    </div>

                    <div class="form-group">
                        <label for="teacherName">Published Date</label>
                        <input type="date" class="form-control" name="dateTime" value="{{$page->dateTime}}" required="1">
                        <small class="text-danger">{{ $errors->first('dateTime') }}</small>
                    </div>

                    <div class="form-group">
                        @if($page->image)
                        <label for="teacherName">Image</label>
                        <img style="height: 50px" width="50px"  src="{{asset('public/images/pages/'.$page->image)}}">
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="ImageUpload">Image Upload</label>

                        <input type="file" name="image" >

                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection






