@extends('admin.home')
@section('headTitle')
Page
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="card m-auto">
            <div class="card-body">
                <div class="form-group">
                    <h3>Add New Page</h3>
                </div>
                @if (Session::has('message'))
                <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                @endif

                <form action="{{route('insert.page')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="title" required>
                        <span class="text-danger">
                            <strong
                            {{ $errors->first('title') }}
                            </strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="Slug">Summary</label>
                        <textarea class="ckeditor"  name="summary" ></textarea>
                        <span class="text-danger">
                            <strong
                            {{ $errors->first('summary') }}
                            </strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="Title">Content</label>
                        <textarea class="ckeditor"  name="content" required></textarea>
                         <span class="text-danger">
                            <strong
                            {{ $errors->first('content') }}
                            </strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="teacherName">Published Date</label>
                        <input type="date" class="form-control" name="dateTime">
                         <span class="text-danger">
                            <strong
                            {{ $errors->first('dateTime') }}
                            </strong>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="ImageUpload">Image Upload</label>
                        <input type="file" name="image">
                        <span class="text-danger">
                            <strong
                            {{ $errors->first('image') }}
                            </strong>
                        </span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>
            </div>

        </div>

    </div>

</div>

@endsection






