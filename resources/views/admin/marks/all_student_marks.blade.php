@extends('admin.home')
@section('headTitle')
All Student Marks
@endsection
@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3>All Student Marks List</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Class Name</th>
                                <th scope="col">Stuject Name</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Exam Year</th>
                                <th scope="col">CA</th>
                                <th scope="col">CR</th>
                                <th scope="col">MCQ</th>
                                <th scope="col">Pr</th>
                                <th scope="col">AB</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($student_marks as $student_mark)
                            <tr>
                                <td>{{$student_mark->id}}</td>
                                <td>{{$student_mark->name}}</td>
                                <td>{{$student_mark->classNameEnglish}}</td>
                                <td>{{$student_mark->subject_english}}</td>
                                <td>{{$student_mark->examName}}</td>
                                <td>{{$student_mark->examYear}}</td>
                                <td>{{$student_mark->ca}}</td>
                                <td>{{$student_mark->cr}}</td>
                                <td>{{$student_mark->mcq}}</td>
                                <td>{{$student_mark->pr}}</td>
                                <td>{{$student_mark->ap}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation">
                        {{$student_marks->links()}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection