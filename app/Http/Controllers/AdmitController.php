<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ClassName;
use App\Exam;
use App\Student;
use PDF;

class AdmitController extends Controller {

    public function index(Request $request) {
        
        $classId = @$request->className;
        $data['examName'] = @$request->examName;
        $data['students'] = @DB::table('student_academics')
                ->join('class_names','student_academics.class_id','=','class_names.id')
                ->join('students','student_academics.student_id','=','students.student_id')
                ->join('student_subjects','student_subjects.academic_id','=','student_academics.id')
                ->where('student_academics.class_id', $classId)
                ->select('student_academics.*','student_subjects.*','class_names.classNameEnglish','students.name','students.student_id')
                ->get()->toArray();
//        dd($data['students']);
        $data['student_image'] = DB::table('student_academics')
                ->join('students','student_academics.student_id','=','students.student_id')
                ->join('student_subjects','student_academics.id','=','student_subjects.academic_id')
                ->where('student_academics.class_id', $classId)->first();
//                dd($data['student_image']);

        $data['settings'] = DB::table('settings')->first();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classname'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        if ($data['students']) {
            $pdf = PDF::loadView('admin.admit_cart.admit_pdf', $data);
            return $pdf->download('admit_pdf.pdf');
        }
        return view('admin.admit_cart.admit',$data )->with('exam', Exam::all());
    }

}