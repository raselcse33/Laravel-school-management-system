<!--<!DOCTYPE html>
<html>
    <body>
            @foreach($students as $student)
            <p style="border: #000 solid 1px; float: left; margin: 10px; width: 32%; text-align: center; font-weight: bold; padding: 10px;">
                <b>
                    Roll    : {{ $student->roll }}<br />
                    Name    : {{ $student->studentName }}<br /> 
                    Class   : {{ $student->classNameId }}<br />
                    Section : {{ $student->section }}<br />
                    Group   : {{ $student->studentGroup }}<br />
                </b>
            </p>
            @endforeach
    </body>
</html>-->


<div style="border: #000 solid 1px; width: 100%; margin-bottom: 10px;">
    <table width=100%>
        <tr><td style="background: #000;"><h2 align="center" style="padding: 0px; margin: 0px; color: #fff; font-size: 18px;">Udaypur High School</h2></td></tr>
        <tr><td><h3 align="center" style="padding: 0px; margin: 0px; font-size: 14px;">P.O:HABASHPUR,UPAZILA:PANGSHA,DISTRICT:RAJBARI</h3></td></tr>
        <tr><td>&nbsp;</td></tr>
    </table>
    <table width=100% style="border:1px solid #00000">
        <tr>
            <th>NO</th>
            <th>Student Name</th>
            <th>Student Roll</th>
            <th>Semester</th>
            <th>Exam Year</th>
            <th>Full Mark</th>
            <th>Latter Grade</th>
            <th>GPA</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->studentName}}</td>
            <td>{{$student->student_id}}</td>
            <td>{{@request('exam_id')}}</td>
            <td>{{@request('examYear')}}</td>
            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['total_mark'] }}</td>
            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['letter_grade'] }}</td>
            <td>{{ @semesterTotal(@request('class_id'), @$student->student_id, @request('exam_id'), @request('examYear'))['gpa'] }}</td>
        </tr>
          @endforeach
    </table>
</div>       
                      