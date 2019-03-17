@extends('admin.home')
@section('headTitle')
Class Results
@endsection
@section('content')


<div class="container">
    <div class="row mb-5">
        <div class="col-sm-12">
            {{Form::open(['method'=>'post','class'=>'form-inline'])}}
            <div class="form-group col-sm-2 ">
                <select name="class_id"  class="form-control" required="1">
                    <option value="">Choose Class</option>
                    @foreach($classNames as $className)
                    <option  
                        {{ (@request('class_id') == $className->id)? 'selected' : ''  }}  
                        value="{{$className->id}}">{{$className->classNameEnglish}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-2">
                <select name="exam_id" class="form-control" required="1">
                    <option value="">Choose Exam</option>
                    @foreach($exams as $exam)
                    <option 
                        {{ (@request('exam_id') == $exam->id)? 'selected' : ''  }}  
                        value="{{$exam->id}}">{{$exam->examName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-sm-2">
                <select name="examYear" class="form-control" required="1">
                    <option value="">Choose Year</option>
                    @for($i=date('Y'); $i >= 2017; --$i)
                    <option 
                        {{ (@request('examYear') == $i)? 'selected' : ''  }}  
                        value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group col-sm-2">
                <div class="text-center">
                    <input type="submit" name="btn" class="btn btn-success" value="SUBMIT" />
                </div>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>


<div class="container">
    <div class="row mb-4">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <form action="{{route('class.result.download')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="class_id" value="{{@request('class_id')}}">
                        <input type="hidden" name="exam_id" value="{{@request('exam_id')}}">
                        <input type="hidden" name="examYear" value="{{@request('examYear')}}">
                        <button  class="btn btn-success pull-right mb-3">Download Results</button>
                    </form>
                </div>
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Student Roll</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Exam Year</th>
                            <th scope="col">Full Mark</th>
                            <th scope="col">Letter Grade</th>
                            <th scope="col">GPA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ @request('exam_id')==1?'1st semester':@request('exam_id').'nd semester' }}</td>
                            <td>{{ @request('examYear') }}</td>
                            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['total_mark'] }}</td>
                            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['letter_grade'] }}</td>
                            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['gpa'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection