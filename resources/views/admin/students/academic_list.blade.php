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
                                <th scope="col">Class Name</th>
                                <th scope="col">Section</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Study Year</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($academics as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->student_id}}</td>
                                <td>{{$student->classNameEnglish}}</td>
                                <td>{{$student->section}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->study_year}}</td>
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
                        {{$academics->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection








