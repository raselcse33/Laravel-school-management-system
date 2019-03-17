<!doctype>
<html>
    <head>
        <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"  >-->
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
        <style>
            #result-marks th{
                margin: 5px !important;
                padding: 0px !important;
            }
            #result-marks td{
                margin: 5px !important;
                padding: 0px !important;
            }
            table tr td table tr {
                margin: 0px;
                padding: 0px;
            }
            table tr td table th {
                margin: 0px;
                padding: 0px;
            }
            table tbody tr td table tbody tr {
                margin: 0px;
                padding: 0px;
            }
        </style>
    </head>
    <body>


        <div style=" width: 100%; margin: auto; font-size: 10px;  margin-bottom: 10px; box-sizing: border-box">
            <table style="text-align:center;" width="100%">
                <tr >
                    <td ><h1 style="margin: 0px; padding: 0; font-size: 16px;" >{{$setting->name}}</h1></td>
                </tr>
                <tr ><td ><p style="margin: 0px; padding: 0;font-size: 14px;" >{{$setting->address}}</p></td></tr>
            </table>
            <table width="100%" style=" margin: auto;">
                <tr>
                    <td >
                        <table style="text-align: right;margin-top: -50px;" width="80%"  >
                            <tr >
                                <td><span style="margin: 0px; padding: 0;"><img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="Logo"style="margin-right: 22px;"  width="100" height="80"></span></td>
                            </tr>
                            <tr style="text-align:right;"><td style="margin-top: 10px;"><p style="margin: 0px;padding: 0;font-size: 12px;margin-top: 8px;margin-right: 10px;"> PROGRESS REPORT</p></td></tr>
                        </table>
                    </td>
                    <td width="30%" heigt="50%">
                        <table class="table table-bordered" style="text-align:center;margin:auto;margin-top: 35px; font-size: 12px;" width="30%">
                            <tr style="margin:0px;padding: 0px;">
                                <th style="margin:0px;padding: 0px;">Range</th>
                                <th style="margin:0px;padding: 0px;">Grade</th>
                                <th style="margin:0px;padding: 0px;">GPA</th>
                            </tr>
                            <tbody>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">80-100</td>
                                    <td style="margin:0px;padding: 0px;">A+</td>
                                    <td style="margin:0px;padding: 0px;">5.00</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">70-79</td>
                                    <td style="margin:0px;padding: 0px;">A</td>
                                    <td style="margin:0px;padding: 0px;">4.5</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">60-69</td>
                                    <td style="margin:0px;padding: 0px;">A-</td>
                                    <td style="margin:0px;padding: 0px;">3.5</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">50-59</td>
                                    <td style="margin:0px;padding: 0px;">B</td>
                                    <td style="margin:0px;padding: 0px;">3.0</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">40-49</td>
                                    <td style="margin:0px;padding: 0px;">C</td>
                                    <td style="margin:0px;padding: 0px;">3.0</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">33-39</td>
                                    <td style="margin:0px;padding: 0px;">D</td>
                                    <td style="margin:0px;padding: 0px;">1.0</td>
                                </tr>
                                <tr style="margin:0px;padding: 0px;">
                                    <td style="margin:0px;padding: 0px;">00-32</td>
                                    <td style="margin:0px;padding: 0px;">F</td>
                                    <td style="margin:0px;padding: 0px;">0.0</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="100%" style=" margin: auto;  overflow-x: hidden;  margin-bottom: 20px;"> 
                <tr>
                    <td>
                        <table style="text-align:left;font-size: 12px; margin: auto;margin-top: -60px;" width="100%" >
                            <tbody>
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
                                    <td>: {{@$studentinfo->classNameEnglish}}- {{@$studentinfo->section}} </td>
                                </tr>
                                <tr>
                                    <th>Roll</th>
                                    <td>: {{@$studentinfo->roll}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table style="text-align: left; font-size: 12px; margin-left: -19%;margin-top: 19px; overflow: hidden;" width="70%" >
                            <tbody>
                                <tr >
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
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <div class="row clearfix" width="90%" id="result-marks" >
                <div class="col text-center mark-head">
                    <table class="table table-bordered">
                        <tr>
                            <th>Subject</th>
                            <th>Height Marks</th>
                            <th>
                                Mark Distribution
                                <table class="borderless w-100 tnb">
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
                            <td>{{ @highestMark($result->classNameId, $result->subject_code, $result->semisterId, $result->examYear) }}</td>
                            <td>
                                <table class=" borderless w-100 tnb tnbn">
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

            <table width="100%">
                <tr>
                    <td width="30%" style="margin: auto;"> 
                        <table class="table table-bordered" width="95%" style="text-align: left; margin-bottom:40px; font-size: 12px; margin:auto;"  >
                            <tbody>
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
                            </tbody>
                        </table>
                    </td>
                    <td width="30%">
                        <table class="table table-bordered" style="text-align: left; width: 95%;font-size: 12px; margin: auto;">
                            <tbody>
                                <tr>
                                    <th colspan="2" style=""> Moral &amp; Behavior Evaluation </th>
                                </tr>
                                <tr>
                                    <th></th>
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
                            </tbody>
                        </table>
                    </td>
                    <td width="30%" >
                        <table class="table table-bordered" style="text-align: left;font-size: 12px; margin: auto; width: 100%;">
                            <tbody>
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
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="100%" style="margin: auto;font-size: 12px;margin-top: 31px; ">
                <tr>
                    <td width="30%">
                        <table width="100%"  style="text-align: center; " > 
                            <tr>
                                <td><hr></td>
                                <td style="">Guardian</td>
                            </tr>
                        </table>
                    </td>
                    <td width="30%">
                        <table width="100%"  style="text-align: center; "> 
                            <tr>

                                <td style="">Class Teacher</td>
                            </tr>
                        </table> 
                    </td>
                    <td width="30%">
                        <table width="100%" style="text-align: center;"> 
                            <tr>

                                <td style="">Head Teacher</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <div>
                </body>
                </html>