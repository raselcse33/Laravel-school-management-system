@extends('admin.home')
@section('headTitle')
Classes
@endsection
@section('content')
<section role="main" class="content-body">
    <div class="row grid-margin">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-2">
                    <h3 class="card-title">Add New Class</h3>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    {{ Form::open(['route'=>'add.class','method'=>'post','enctype'=>'multipart/form-data'])}}
                    
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Class Name(English)</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="classNameEnglish" placeholder="Class Name" class="form-control" required>
                            @if ($errors->has('classNameEnglish'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameEnglish') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">

                            <label class="col-form-label">Class Name(Bangla)</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="classNameBangla" placeholder="Class Name" class="form-control" required>
                            @if ($errors->has('classNameBangla'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('classNameBangla') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            {{Form::submit('Create Class',['class'=>'btn btn-success mr-2'])}}
                        </div>
                    </div>
                    {{Form::close()}}
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <h3>All Classes</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Class Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($classes as $class)
                                <tr>
                                    <td>{{ $class->id }}</td>
                                    <td>{{ $class->classNameEnglish }}</td>
                                    <td>
                                    <a href="{{url('class/edit/'.$class->id)}}" class="btn btn-success btn-sm mb-1">Edit</a>
                                       <a href="{{route('class.delete',$class->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger btn-sm">Delete</a>
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
</section>

@endsection