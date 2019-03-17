<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ClassName;
use App\Exam;
use App\Setting;
use App\Student;
use Session;
use PDF;

class ExamSeatPlainingController extends Controller {

    public function index(Request $request) {
        $message = "";
        $classId = @$request->className;
        $examName = @$request->examName;
        $data['setting']=Setting::first();
        $data['students'] = DB::table('student_academics')
                ->join('class_names','student_academics.class_id','=','class_names.id')
                ->join('students','student_academics.student_id','=','students.student_id')
                ->join('student_subjects','student_subjects.academic_id','=','student_academics.id')
                ->where('student_academics.class_id', $classId)
                ->select('student_academics.*','class_names.id','student_subjects.student_group','class_names.classNameEnglish','students.name','students.student_id')
                ->get()->toArray();
        
        if (isset($_POST['submit'])) {
//            dd($data['students']);
            if ($data['students']) {
                $pdf = PDF::loadView('admin.exam_seat_planining.exam_seat_pdf', $data);
                return $pdf->download('exam_seat_pdf.pdf');
            } else {
                Session::flash('message', 'No Students Found.........');
            }
        }
        $data['settings'] = DB::table('settings')->first();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classname'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['exam']=Exam::all();
        return view('admin.exam_seat_planining.exam_seat',$data)->with('message', $message);
    }

    // public function show(Request $request) {
    //     $classId = $request->className;
    //     echo $classId;

    //     $student = DB::table('students')->where('classNameId', $classId)->get();

    //     foreach ($student as $s) {
    //         echo $s->studentName . "<br>";
    //     }
    // }

}