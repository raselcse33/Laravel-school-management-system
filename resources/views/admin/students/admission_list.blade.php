@extends('admin.home')
@section('headTitle')
Admission List
@endsection

@section('content')
{{Form::open(['route'=>'student.info.view','method'=>'post']) }}
<div class="container">
    <div class="row ">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>Student List</h3>
                    @if (Session::has('message'))
                    <div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>{{ Session::get('message') }}</div>
                    @endif
                    <table class="table table-hover table-responsive-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th >Student Name</th>
                                <th >Class Name</th>
                                <th >Group</th>
                                <th >Father's Name</th>
                                <th >Number</th>
                                <th>Image</th>
                                <!--<th>Action</th>-->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admission as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->classNameEnglish}}</td>
                                <td>{{$student->student_group}}</td>
                                <td>{{$student->father_name}}</td>
                                <td>{{$student->contuct_number}}</td>
                                <td><img height="50px" width="50px" src="{{asset('public/images/admisson/'.$student->image)}}"></td>
<!--                                <td>
                                     <a href="{{route('student.info.view')}}" class="btn btn-success mb-1">View</a>
                                </td>-->
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$admission->render()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{Form::close()}}
@endsection