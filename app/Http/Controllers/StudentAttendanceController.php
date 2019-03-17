<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassName;
use App\Section;
// use App\Attendance;
use App\StudentAcademic;
use DB;

class StudentAttendanceController extends Controller
{
  
    
     public function attendenceView() {
       $data['classNames'] = ClassName::all();
       $data['sections'] = Section::all();
       return view('admin.attendance.attendance',$data); 
    }

    public function createAttendence(Request $request)
    {
    	$this->validate($request,[
            'class_id' => 'required',
            'section_id'   =>'required'
    	]);

    	$class_id = $request->class_id;
    	$section_id = $request->section_id;
    	$data['students'] = DB::table('student_academics')
                    ->join('class_names', 'student_academics.class_id', '=', 'class_names.id')
                    ->join('students', 'student_academics.student_table_id', '=', 'students.id')
                    ->where('student_academics.class_id',$class_id)
                    ->where('student_academics.section',$section_id)
                    ->select('students.name','student_academics.student_id', 'student_academics.roll','class_names.classNameEnglish')
                    ->get();

         $data['className'] = ClassName::find($class_id);  
         $data['sectionName']   = Section::find($section_id);    

         return view('admin.attendance.create_attendance',$data);


    }
    public function addAttendance(Request $request)
    {
      $attendance = new Attendance();
      $attendance->class_id = $request->class_id;
      $attendance->section_id = $request->section_id;
      $attendance->date = $request->date;
      $attendance->student_id = $request->student_id;
      $attendance->name = $request->name;
      $attendance->roll = $request->roll;
      $attendance->attendence = $request->attendence;
      dd($attendance->attendence);   
   }

 /*
 *2-2-2019 edit student attendance
 */
 public function editStudentAttendance()
 {
   $data['classNames'] = ClassName::all();
   $data['sections'] = Section::all();
   return view('admin.attendance.edit_student_attendance',$data); 
 }

 public function studentAttendanceList(Request $request)
 {
   return view('admin.attendance.student_attendance_list');
 }

}
