@extends('admin.home')
@section('headTitle')
Student List
@endsection
@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>Student List</h3>
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Student Name</th>
                                <th scope="col">Student Id</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Mother Name</th>
                                <th scope="col">Date of Birdth</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->student_id}}</td>
                                <td>{{$student->phone_number}}</td>
                                <td>{{$student->father}}</td>
                                <td>{{$student->mother}}</td>
                                <td>{{$student->date_of_birdth}}</td>
                                <td><img height="50px" width="50px" src="{{asset('public/images/students/'.$student->image)}}"></td>
                                <td>
                                    <a href="{{route('edit.student',['id'=>$student->id])}}" class="btn btn-success mb-1">Edit</a>
                                    <!--<a href="{{route('view.student',$student->id)}}" class="btn btn-info">View</a>-->
                                    <!--<a href="#" class="btn btn-danger">Delete</a>-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$students->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection






