<div style="border: #000 solid 1px; width: 100%; margin: auto; font-size: 10px;  margin-bottom: 10px; box-sizing: border-box">
    <table style="text-align:center;" width="100%">
        <tr >
            <td ><h1 style="margin: 0px; padding: 0; font-size: 16px;" >{{$setting->name}}</h1></td>
        </tr>
        <tr ><td ><p style="margin: 0px; padding: 0;font-size: 14px;" >{!!$setting->address!!}</p></td></tr>
    </table>
    <table width="100%" style="overflow: hidden; margin: auto;">
        <tr>
            <td style="margin: 0px; padding: 0px;">
                <table style="float:right;overflow: hidden;text-align: right;margin-top: -96px;" width="50%"  >
                    <tr >
                        <td><span ><img src="{{asset('public/images/settings/'.$setting->logo)}}" alt="Logo"style="margin-right: 22px;"  width="100" height="80"></span></td>
                    </tr>
                    <tr ><td style="margin-top: 10px;"><p style="margin: 0px;padding: 0;font-size: 12px;margin-top: 8px;margin-left: 20px;"> <strong>PROGRESS REPORT</strong></p></td></tr>
                 </table>
            </td>
            <td>
                <table style="text-align:center;margin:auto;margin-top: 35px; font-size: 12px;" width="50%">
                        <tr style="margin:0px;padding: 0px;">
                            <th >Range</th>
                            <th>Grade</th>
                            <th>GPA</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr >
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr >
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr>
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr >
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr >
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                            <tr >
                                <td>80-100</td>
                                <td>A+</td>
                                <td>5.00</td>
                            </tr>
                        </tbody>
                    </table>
               </td>
        </tr>
    </table>
    <table width="90%" style=" margin: auto;  overflow-x: hidden; "> 
        <tr>
            <td>
                <table style="text-align:left;font-size: 12px; margin: auto;margin-top: -102px;" width="70%" >
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
                            <td>:  {{@$studentinfo->student_id}}</td>
                        </tr>
                        <tr>
                            <th>Class</th>
                            <td>: {{@$studentinfo->classNameEnglish}}- {{@$studentinfo->section}}  </td>
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
    <table width="80%"  style="margin: auto; text-align: center; font-size: 12px; margin-bottom:40px; overflow: hidden; ">
        <tr style=" margin: 0px;padding: 0px;">
            <th style=" margin: 0px;padding: 0px;">Subject</th>
            <th style="margin: 0;padding: 0;">Height Marks</th>
            <th>Total Marks</th>
            <th>Latter Grade</th>
            <th>GPA</th>
        </tr>
        @foreach($results as $result)
        <tr>
            <td>{{$result->subjectNameEnglish}}</td>
            <td>{{ @highestMark($result->classNameId, $result->subject_code, $result->semisterId, $result->examYear) }}</td>
            <td>{{$result->subjectTotal}}</td>
            <td>{{$result->letterGrade=='0'? '-':$result->letterGrade}}</td>
            <td>{{$result->gpa==0?'-':$result->gpa}}</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td ><b>Obtained Marks &amp; GPA</b></td>
            <td>626</td>
            <td>A+</td>
            <td>5.00</td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td width="40%" style="margin: auto;"> 
                <table style="text-align: left; margin-bottom:40px; font-size: 12px; margin:auto;"  >
                    <tbody>
                        <tr>
                            <th>Class Position</th>
                            <td> {{ @semesterClassPosition(@request('class_id'), @request('student_id'), @request('exam_id'), @request('examYear'))['total_mark'] }}</td>
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
                <table style="text-align: left; width: 100%;font-size: 12px; margin: auto;">
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
            <td width="30%">
                <table style="text-align: left;font-size: 12px; margin: auto; width: 80%;">
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
    <table width="90%" style="margin: auto;font-size: 12px;margin-top: 31px; ">
        <tr>
            <td width="40%">
                <table width="60%"  style="text-align: center; margin: auto;" > 
                    <tr>
                       
                        <td style="">Guardian</td>
                    </tr>
                </table>
            </td>
            <td width="30%">
                <table width="60%"  style="text-align: center; margin: auto;"> 
                    <tr>
                    
                    <td style="">Class Teacher</td>
                     </tr>
                </table> 
            </td>
            <td width="30%">
                <table width="60%" style="text-align: center; margin: auto;"> 
                    <tr>
                        
                        <td style="">Head Teacher</td>
                    </tr>
                </table>
            </td>
        </tr>
   </table>
<div>