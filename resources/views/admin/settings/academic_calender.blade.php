@extends('admin.home')
@section('headTitle')
Academic Calender
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

                    <h3>Add New Academic Calender</h3>
                    <form action="{{route('academic.calender.store')}}" method="post" class="form-row" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-sm-12">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title"  name="title" placeholder="Enter title" required>
                            <span class="text-danger">
                                <strong> {{ $errors->first('title') }} </strong>
                            </span>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="academicDate">Date</label>
                            <input type="date" class="form-control" id="academicDate"  name="calender_date" placeholder="Enter Title">
                            <span class="text-danger">
                                <strong> {{ $errors->first('calender_date') }} </strong>
                            </span>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="image">Image Or PDF File</label>
                            <input type="file" class="form-control" id="image"  name="image" required>
                            <span class="text-danger">
                                <strong> {{ $errors->first('image') }} </strong>
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
                    <div class="form-group">
                        <h3>All Calender</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Calender Date</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Calender View</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($academics as $academic)
                                <tr>
                                    <td>{{ $academic->calender_date }}</td>
                                    <td>{{ $academic->title }}</td>
                                    <td><a href="{{asset('public/images/academic_calender/'.$academic->image)}}" style="color:#0061F6;text-decoration: none;"> Calender View </a></td>
                                   <td>
                                        <a href="{{route('calender.edit',$academic->id)}}" class="btn btn-success">Edit</a>
                                       <a href="{{route('calender.delete',$academic->id)}}" onclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-danger">Delete</a>
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
