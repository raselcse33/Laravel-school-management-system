<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use App\Exam;
use App\ClassName;
use App\StudentMarks;
use App\Student;
use App\GPARange;
use App\Setting;
use App\StudentAcademic;
use DB;
use PDF;

class ResultController extends Controller {

    public function index(Request $request) {


        $data = [];
        $data['not_found'] = '';

        $data['exams'] = Exam::all();
        $data['classNames'] = className::all();
        $data['studentMarks'] = StudentMarks::all();
        $data['gpaRanges'] = GPARange::all();
        $data['setting'] = Setting::first();
        $data['exam_name'] = @Exam::where('id', @$request->exam_id)->first()->examName;
        $data['student_group'] = @Student::where('student_id', @$request->student_id)->first()->studentGroup;
        // $this->validate($request,[
        //     'student_id'=>'required',
        // ]);
        $data['studentinfo'] = @DB::table('students')
                        ->where('student_id', $request->student_id)
                        
                        ->first();
        $data['student_academic'] = @DB::table('student_academics')
                        ->join('class_names', 'student_academics.class_id', '=', 'class_names.id')
                        ->where('student_id', $request->student_id)
                        ->select('student_academics.section','student_academics.roll','class_names.classNameEnglish')
                        ->first();
        $data['student_subject'] = @DB::table('student_subjects') ->where('student_id', $request->student_id)->first();

        $data['results'] = @DB::table('student_marks')
                            ->join('students', 'student_marks.studentRoll', '=', 'students.student_id')
                            ->join('class_names', 'student_marks.classNameId', '=', 'class_names.id')
                            ->join('subjects', 'student_marks.subjectCode', '=', 'subjects.subject_code')
                            ->join('exams', 'student_marks.semisterId', '=', 'exams.id')
                            ->where('student_marks.studentRoll', $request->student_id)
                            ->where('student_marks.classNameId', $request->class_id)
                            ->where('student_marks.semisterId', $request->exam_id)
                            ->where('student_marks.examYear', $request->examYear)
                            ->orderBy('student_marks.subjectCode','asc')
                            ->select('student_marks.*',  'class_names.*', 'subjects.*')
                            ->get()->toArray();
        

        return view('admin.results.result', $data);
    }

    public function classResults(Request $request) {
        // dd($request);
         
        $data['exams'] = Exam::all();
        $data['classNames'] = className::all();
//        $data['results'] = @DB::table('student_marks')
//                        ->join('students', 'student_marks.studentRoll', '=', 'students.student_id')
//                        ->join('class_names', 'student_marks.classNameId', '=', 'class_names.id')
//                        ->join('subjects', 'student_marks.subject_code', '=', 'subjects.id')
//                        ->join('exams', 'student_marks.semisterId', '=', 'exams.id')
//                        ->where('student_marks.classNameId', $request->class_id)
//                        ->where('student_marks.semisterId', $request->exam_id)
//                        ->where('student_marks.examYear', $request->examYear)
//                        ->select('student_marks.*', 'students.id', 'class_names.*', 'subjects.*')
//                        ->get();

        $data['students'] = DB::table('student_academics')->join('students','students.student_id','=','student_academics.student_id')->where('class_id', $request->class_id)->get();
//        $data['students'] = StudentAcademic::where('class_id', $request->class_id)->get();
        // $data['student_marks']=Student_marks::
//        print_r($data['students']);
//        
//        die;
//          dd($data['student_academic']);
        return view('admin.results.class_result', $data);
    }

    public function classResultDownload(Request $request) {
        $data['setting'] = Setting::first();
        $data['students'] = Student::where('classNameId', $request->class_id)->get();
        // dd($data['students']);
        $pdf = PDF::loadView('admin.results.class_result_pdf', $data);
        return $pdf->download('class_result_pdf.pdf');
    }
    public function resultDownload(Request $request) {
//        dd($request);
        $data = [];
        $data['not_found'] = '';
        $data['exams'] = Exam::all();
        $data['classNames'] = className::all();
        $data['studentMarks'] = StudentMarks::all();
        $data['gpaRanges'] = GPARange::all();
        $data['setting'] = Setting::first();
        $data['exam_name'] = @Exam::where('id', @$request->exam_id)->first()->examName;
        $data['student_group'] = @Student::where('student_id', @$request->student_id)->first()->studentGroup;
        // $this->validate($request,[
        //     'student_id'=>'required',
        // ]);
        $data['studentinfo'] = @DB::table('students')
                                ->join('class_names', 'students.classNameId', '=', 'class_names.id')
                                ->where('student_id', $request->student_id)
                                ->select('students.id', 'students.studentName', 'students.fatherName', 'students.motherName', 'students.student_id', 'students.roll', 'students.section', 'class_names.id', 'class_names.classNameEnglish')
                                ->first();

        $data['results'] = @DB::table('student_marks')
                            ->join('students', 'student_marks.studentRoll', '=', 'students.student_id')
                            ->join('class_names', 'student_marks.classNameId', '=', 'class_names.id')
                            ->join('subjects', 'student_marks.subject_code', '=', 'subjects.subject_code')
                            ->join('exams', 'student_marks.semisterId', '=', 'exams.id')
                            ->where('student_marks.studentRoll', $request->student_id)
                            ->where('student_marks.classNameId', $request->class_id)
                            ->where('student_marks.semisterId', $request->exam_id)
                            ->where('student_marks.examYear', $request->examYear)
                            ->select('student_marks.*', 'students.id', 'class_names.*', 'subjects.*')
                            ->get()->toArray();
        $pdf = PDF::loadView('admin.results.results_pdf',$data);
        return $pdf->download('results_pdf.pdf');
    }
}
