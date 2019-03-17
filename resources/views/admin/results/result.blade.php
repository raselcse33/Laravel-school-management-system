@extends('admin.home')
@section('headTitle')
Search Result
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            {{Form::open(['method'=>'post','class'=>'form-inline'])}}
            <div class="form-group col-sm-3 ">
                <input type="text" name="student_id" value="{{ @request('student_id') }}"  class="form-control" placeholder="Student's ID" required="1">
            </div>
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

    @if(@request('class_id') || @request('exam_id') || @request('student_id') || @request('examYear'))
    @if(@request('class_id') && @request('exam_id') && @request('student_id') && @request('examYear'))
    @if($studentinfo && $results)
    <div class="result-box mb-5">
        <div class="row">
            <div class="col-md-12">
                </br>
                {{Form::open(['route'=>'result.download','method'=>'post','class'=>'form-inline'])}}
                <div class="form-group col-sm-3 ">
                    <input type="hidden" name="student_id" value="{{ @request('student_id') }}"  class="form-control" placeholder="Student's ID" required="1">
                </div>
                <div class="form-group col-sm-2 ">
                    <input type="hidden" name="class_id" value="{{ @request('class_id') }}"  class="form-control" >
                </div>
                <div class="form-group col-sm-2">
                    <input type="hidden" name="exam_id" value="{{ @request('exam_id') }}"  class="form-control" >
                </div>
                <div class="form-group col-sm-2">
                    <input type="hidden" name="examYear" value="{{ @request('examYear') }}"  class="form-control" >
                </div>
                <div class="form-group col-sm-2">
                    <div class="text-center">
                        <input type="submit" class="btn btn-success" value="Download" />
                    </div>
                </div>
                {{Form::close()}}
                <br />
            </div>
            <div class="col-md-12 pdf-box">

                <!--                                <button id="cmd">Generate PDF</button>-->
                <div class="pdf-content pdf-box-content">
                    <div class="pdf-box-main-content">
                        <div class="row mt-5 ">
                            <div class="col text-center">
                                <h3>{{$setting->name}}</h3>
                                <p>{!!$setting->address!!}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9 text-center">
                                <div class="float-right" style="margin-right: 20%;" >
                                    <img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="logo" width="150px" height="120px">
                                    <p><strong>PROGRESS REPORT</strong></p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Range</th>
                                        <th>Grade</th>
                                        <th>GPA</th>
                                    </tr>

                                    <tr>
                                        <td>80 -100</td>
                                        <td>A+</td>
                                        <td>5.0</td>
                                    </tr>
                                    <tr>
                                        <td>70 -79</td>
                                        <td>A</td>
                                        <td>4.0</td>
                                    </tr>
                                    <tr>
                                        <td>60 -69</td>
                                        <td>A-</td>
                                        <td>3.5</td>
                                    </tr>
                                    <tr>
                                        <td>50 -59</td>
                                        <td>B</td>
                                        <td>3.0</td>
                                    </tr>
                                    <tr>
                                        <td>40 -49</td>
                                        <td>C</td>
                                        <td>2.0</td>
                                    </tr>
                                    <tr>
                                        <td>33 -39</td>
                                        <td>D</td>
                                        <td>1.0</td>
                                    </tr>
                                    <tr>
                                        <td>00 -32</td>
                                        <td>F</td>
                                        <td>0.0</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table table-borderless no-table-border">
                                    <tr>
                                        <th>Student's Name</th>
                                        <td>: {{@$studentinfo->studentName}}</td>
                                    </tr>
                                    <tr>
                                        <th>Fathers's Name</th>
                                        <td>: {{@$studentinfo->fatherName}}</td>
                                    </tr>
                                    <tr>
                                        <th>Mother's Name</th>
                                        <td>: {{@$studentinfo->motherName}}</td>
                                    </tr>
                                    <tr>
                                        <th>Student's ID</th>
                                        <td>: {{@$studentinfo->student_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Class</th>
                                        <td>: {{@$studentinfo->classNameEnglish}}- {{@$studentinfo->section}}  </td>
                                    </tr>
                                    <tr>
                                        <th>Roll</th>
                                        <td>: {{@$studentinfo->roll}} </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6" style="margin-top: 8%">
                                <table class="table table-borderless no-table-border">
                                    <tr class="">
                                        <th>Exam</th>
                                        <td>: {{ @$exam_name }} </td>
                                    </tr>
                                    <tr>
                                        <th>Session/Year</th>
                                        <td>: {{ @request('examYear')}}</td>
                                    </tr>
                                    <tr>
                                        <th>Group</th>
                                        <td>: {{ @$student_group }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Subject</th>
                                    {{-- <th>Full Marks</th> --}}
                                    <th>Height Marks</th>
                                        <th>
                                            Mark Distribution
                                            <table class="table borderless w-100 tnb">
                                                <tr>
                                                    <th style="width: 40px;">CA</th>
                                                    <th style="width: 40px;">CR</th>
                                                    <th style="width: 50px;">MCQ</th>
                                                    <th style="width: 40px;">PR</th>
                                                </tr>
                                            </table>
                                        </th>

                                        <th>Total Marks</th>
                                        <th>Latter Grade</th>
                                        <th>GPA</th>
                                    </tr>
                                    @php
                                    $total = 0;
                                    $subject = 0;
                                    $full_mark = 0;
                                    $get_mark = 0;
                                    $grades = [];
                                    $gpa = [];
                                    $subject_codes = [];
                                    @endphp
                                    @foreach($results as $result)
                                    <tr>
                                        <td>{{$result->subjectNameEnglish}}</td>
                                    {{-- <td></td> --}}
                                    <td>{{ @highestMark($result->classNameId, $result->subject_code, $result->semisterId, $result->examYear) }}</td>
                                        <td>
                                            <table class="table borderless w-100 tnb tnbn">
                                                <tr>
                                                    <th style="width: 40px;">{{$result->ca==0? '-':$result->ca}}</th>
                                                    <th style="width: 40px;">{{$result->cr==0? '-':$result->cr}}</th>
                                                    <th style="width: 50px;">{{$result->mcq==0? '-':$result->mcq}}</th>
                                                    <th style="width: 40px;">{{$result->pr==0? '-':$result->pr}}</th>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>{{$result->subjectTotal}}</td>
                                        <td>{{ @resultLetterGrade($result->letterGrade, $result->classNameId, $result->studentRoll, $result->subject_code, $result->semisterId, $result->examYear) }}</td>
                                        <td>{{ @resultGpaPoint($result->gpa, $result->classNameId, $result->studentRoll, $result->subject_code, $result->semisterId, $result->examYear) }}</td>
                                    </tr>
                                    @php
                                    $total += @resultGpaPoint($result->gpa, $result->classNameId, $result->studentRoll, $result->subject_code, $result->semisterId, $result->examYear);
                                    $subject++;
                                    $full_mark += $result->fullMark;
                                    $get_mark += $result->subjectTotal;
                                    $grades[] = @resultLetterGrade($result->letterGrade, $result->classNameId, $result->studentRoll, $result->subject_code, $result->semisterId, $result->examYear);
                                    @endphp
                                    @endforeach




                                    @php
                                    $total_point = @totalGpaCalculation(@request('class_id'), @request('student_id'), @request('exam_id'), @request('examYear'))['total'];
                                    $total_subjects = @totalGpaCalculation(@request('class_id'), @request('student_id'), @request('exam_id'), @request('examYear'))['rows'];
                                    $average_gpa = sprintf('%0.2f', @$total_point/@$total_subjects);
                                    $average_grade = @gpaToGrade($average_gpa);
                                    @endphp


                                    <tr>
                                        <!--<td><b>Total Exam Marks</b></td>-->
                                        <!--<td></td>-->
                                        <td colspan="3"><b>Obtained Marks & GPA</b></td>
                                        <td>{{ sprintf('%0.2f', $get_mark) }}</td>
                                        <!--<td>{{ (in_array('F', $grades)) ? 'F' : @gpaGrade($full_mark, $get_mark)  }}</td>-->
                                        <!--<td>{{ (in_array('F', $grades)) ? 'F' : @$average_grade  }}</td>-->
                                        <!--<td>{{ (in_array('F', $grades)) ? '0.00' : @$average_gpa  }}</td>-->
                                        
                                        <td>{{ @$average_grade  }}</td>
                                        <td>{{ @$average_gpa  }}</td>


                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="row py-0 my-0">
                                    <div class="col-md-4">
                                        <table class="table table-bordered little-padding">
                                            <tr>
                                                <th>Class Position</th>
                                                <td>{{ @semesterClassPosition(@request('class_id'), @request('student_id'), @request('exam_id'), @request('examYear'))['total_mark'] }}</td>
                                            </tr>

                                            <tr>
                                                <th>GPA(Without 4th)</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Failed Subject(s)</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Working Days</th>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th>Total Present</th>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-bordered little-padding">
                                            <tr>
                                                <th colspan="2"> Moral & Behavior Evaluation </th>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Best</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Better</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Good</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Need Improvement</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <table class="table table-bordered little-padding">
                                            <tr>
                                                <th colspan="2">Co-Curricular Activities </th>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Sports</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Cultural Function</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Scout/BNCC</td>
                                            </tr>
                                            <tr>
                                                <th> </th>
                                                <td>Math Olympiad</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="card" style="min-height: 114px; margin-bottom: 20px">
                                    <div class="card-body" style=" width: 118px; -ms-transform: rotate(-90deg); -webkit-transform: rotate(-90deg); transform: rotate(-90deg);">
                                <p>Comments</p>
                                            </div>
                                        </div> --}}
                            </div>
                            <div class="col-md-2">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                                             <hr>
                                        <span class="text-center">Guardian</span>   

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <hr>
                                        <span class="text-center">Class Teacher</span>   

                                    </div>
                                    <div class="col-md-4 text-center">
                                        <hr>
                                        <span class="text-center">Head Teacher</span>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="result-box mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Result Not Found</div>
                    </div>
                </div>
            </div>
            @endif
            @else
            <div class="result-box mb-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Fill All The Field</div>
                    </div>
                </div>
            </div>
            @endif
            @endif
        </div>

        @endsection