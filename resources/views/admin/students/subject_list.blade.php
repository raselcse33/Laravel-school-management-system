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
                                <th scope="col">Group</th>
                                <th scope="col">Religion Subject</th>
                                <th scope="col">Compulsory Subject</th>
                                <th scope="col">Fourth Subject</th>
                                <th scope="col">Study Year</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->student_id}}</td>
                                <td>{{$subject->student_group}}</td>
                                <td>{{$subject->religion_subject}}</td>
                                <td>{{$subject->compulsory_subjects}}</td>
                                <td>{{$subject->fourth_subject}}</td>
                                <td>{{$subject->study_year}}</td>
                                <td>
                                    <a href="{{route('edit.student',['id'=>$subject->id])}}" class="btn btn-success mb-1">Edit</a>
                                    <!--<a href="{{route('view.student',$subject->id)}}" class="btn btn-info">View</a>-->
                                    <!--<a href="#" class="btn btn-danger">Delete</a>-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$subjects->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection








