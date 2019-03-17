<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentMarks;
use App\Student;
use App\ClassName;
use App\Subject;
use App\Setting;
use App\Exam;
use App\SubjectMark;
use App\StudentAcademic;
use App\JoinMarks;
use DB;

class StudentMarksController extends Controller {

    public function index() {
//        $data['classNames'] = ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['subjects'] = Subject::all();
        $data['exams'] = Exam::all();
        return view('admin.marks.add_mark', $data);
    }

    public function studentMark(Request $request) {
        // dd($request);	
        $this->validate($request, [
            'classNameId' => 'required',
            'subject_code' => 'required'
        ]);
        $students = DB::table('student_academics')
                    ->join('class_names', 'student_academics.class_id', '=', 'class_names.id')
                    ->join('students', 'student_academics.student_id', '=', 'students.student_id')
                    ->where('student_academics.class_id', 'LIKE', '%' . $request->classNameId . '%')
                    ->where('student_academics.class_id', 'LIKE', '%' . $request->classNameId . '%')
                    ->select('students.id', 'students.name', 'students.student_id')
                    ->get();
        
        $className = DB::table('class_names')->find($request->classNameId);
        $subjects = Subject::all();
        $exams = Exam::all();
        return view('admin.marks.add_students_mark', compact('students', 'className', 'subjects', 'exams'));
    }

    public function marksAdd(Request $request) {

//      dd($request);
        $subject_code = $request->subject_code;
        $semisterId = $request->semisterId;
        $examYear = $request->examYear;
        $notEffect = $request->not_effect;
        $studentRoll = $request->studentRoll;
        $classNameId = $request->marks_class_name;
        $mark_exists = @StudentMarks::where('semisterId', $semisterId)->where('subject_code', $subject_code)->where('classNameId', $classNameId)->where('examYear', $examYear)->first();

        if (@$mark_exists) {
            return redirect()->back();
        }


        $full_marks_with_class = @SubjectMark::where('subject_code', $subject_code)->where('class_id', $classNameId)->orderBy('id', 'desc')->first()->full_mark;
        $full_marks_without_class = @SubjectMark::where('subject_code', $subject_code)->where('class_id', null)->orWhere('class_id', '')->orderBy('id', 'desc')->first()->full_mark;

        if ($full_marks_with_class) {
            $full_marks = $full_marks_with_class;
        } else if ($full_marks_without_class) {
            $full_marks = $full_marks_without_class;
        }
        $ca = $request->ca;
        $cr = $request->cr;
        $mcq = $request->mcq;
        $pr = $request->pr;
        $subjectTotal = $request->subjectTotal;
        $gpa = $request->gpa;
        foreach ($studentRoll as $key => $value) {
            $get_marks = @$ca[$key] + @$cr[$key] + @$mcq[$key] + @$pr[$key];
            if (empty($full_marks)) {
                return redirect('subject/mark/add')->with('message', 'Please Set Marks');
            }
            if (isset($ca[$key]) || isset($cr[$key]) || isset($mcq[$key]) || isset($pr[$key])) {
                $letterGrade = $this->gpaGrade(@$full_marks, $get_marks);
                $gpaGrade = $this->gpaPoint(@$full_marks, $get_marks);
                $studentMarks = new StudentMarks;
                $studentMarks->studentRoll = $studentRoll[$key];
                $studentMarks->classNameId = $classNameId;
                $studentMarks->subject_code = $subject_code;
                $studentMarks->semisterId = $semisterId;
                $studentMarks->fullMark = $full_marks;
                $studentMarks->examYear = $examYear;
                if ($notEffect) {
                    $studentMarks->not_effect = $notEffect;
                }
                $studentMarks->ca = $ca[$key];
                $studentMarks->cr = $cr[$key];
                $studentMarks->mcq = $mcq[$key];
                $studentMarks->pr = $pr[$key];
                $studentMarks->subjectTotal = $get_marks;
                $studentMarks->letterGrade = $letterGrade;
                $studentMarks->gpa = $gpaGrade;
                $studentMarks->save();
            }
        }
        return redirect('marks/add')->with('message', 'Marks inserted Successfully');
    }

    public function showMark() {
//        $data['classNames'] = ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['subjects'] = Subject::all();
        $data['exams'] = Exam::all();
        return view('admin.marks.show_marks', $data);
    }

    public function viewMarks(Request $request) {
        $this->validate($request, [
            'classNameId' => 'required',
            'subject_code' => 'required',
            'examYear' => 'required',
            'semisterId' => 'required',
        ]);

        //echo $request->subjectId;
        //die;
        $data['student_marks'] = DB::table('student_marks')
                ->join('students', 'student_marks.studentRoll', '=', 'students.student_id')
                ->where('student_marks.classNameId', $request->classNameId)
                ->where('subjectCode', $request->subject_code)
                ->where('examYear', $request->examYear)
                ->where('semisterId', $request->semisterId)
                ->select('student_marks.*', 'students.name')
                ->get();


        //print_r($data['student_marks']);


        $data['className'] = ClassName::find($request->classNameId);
        $data['non_effect'] = StudentMarks::where('subjectCode', $request->subject_code)->first();
//        print_r($data['Non_effect']);
        $data['subjectName'] = Subject::where('subject_code', $request->subject_code)->first();
        return view('admin.marks.edit_marks', $data);
    }

    public function updateMarks(Request $request) {
//        dd($request);
        if ($request->id) {
            $studentRoll = $request->studentRoll;
            $classNameId = $request->classNameId;
            $subject_code = $request->subjectCode;
            $semisterId = $request->semisterId;
            $examYear = $request->examYear;
            $marksID = $request->id;
            if ($request->not_effect) {
                $not_effect = $request->not_effect;
            } else {
                $not_effect = 0;
            }
            $full_marks = SubjectMark::where('subjectCode', $subject_code)->orderBy('id', 'desc')->first()->full_mark;
            $ca = $request->ca;
            $cr = $request->cr;
            $mcq = $request->mcq;
            $pr = $request->pr;
            foreach ($marksID as $key => $value) {
                $get_marks = @$ca[$key] + @$cr[$key] + @$mcq[$key] + @$pr[$key];
                if (isset($ca[$key]) || isset($cr[$key]) || isset($mcq[$key]) || isset($pr[$key])) {
                    $letterGrade = $this->gpaGrade($full_marks, $get_marks);
                    $gpaGrade = $this->gpaPoint($full_marks, $get_marks);
                    $update_data = [
                        'fullMark' => $full_marks,
                        'subjectTotal' => $get_marks,
                        'letterGrade' => $letterGrade,
                        'not_effect' => $not_effect,
                        'gpa' => $gpaGrade,
                        'ca' => $ca[$key],
                        'cr' => $cr[$key],
                        'mcq' => $mcq[$key],
                        'pr' => $pr[$key]
                    ];

                    @StudentMarks::where('id', $marksID[$key])->update($update_data);
                }
            }

            return redirect('student/marks/view')->with('message', 'Marks Updated Successfully');
        } else {
            return redirect()->back();
        }
    }

    public function showStudentMarks() {
        $data['student_marks'] = DB::table('student_marks')
                ->join('students', 'student_marks.studentRoll', '=', 'students.student_id')
                ->join('class_names', 'student_marks.classNameId', '=', 'class_names.id')
                ->join('subjects', 'student_marks.subjectCode', '=', 'subjects.subject_code')
                ->join('exams', 'student_marks.semisterId', '=', 'exams.id')
                ->select('student_marks.id', 'student_marks.examYear', 'students.name', 'student_marks.ca', 'student_marks.cr', 'student_marks.mcq', 'student_marks.pr', 'student_marks.ap', 'class_names.classNameEnglish', 'subjects.subject_english', 'exams.examName')
                ->paginate(15);
        // dd($data['student_marks']);
        return view('admin.marks.all_student_marks', $data);
    }

    public function addJoinMarks(Request $request) {

        $data['subjectsName'] = Subject::all();
//        $data['classessName'] = ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classessName'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        return view('admin.marks.join_marks', $data);
    }

    public function storeJoinMarks(Request $request) {
        $this->validate($request, [
            'first_subject' => 'required',
            'second_subject' => 'required',
            'new_subject' => 'required',
            'class_name_id' => 'required',
        ]);
        $first_code = @Subject::where('id', $request->first_subject)->first()->subject_code;
        $second_code = @Subject::where('id', $request->second_subject)->first()->subject_code;


        $classes = $request->class_name_id;

        foreach ($classes as $class) {
            $class_mark_change = @JoinMarks::where('first_subject_code', $first_code)->where('second_subject_code', $second_code)->where('class_name_id', $class)->where('status', '0')->first();
            if (!$class_mark_change) {
                $joinMarks = new JoinMarks;
                $joinMarks->first_subject = $request->first_subject;
                $joinMarks->first_subject_code = $first_code;
                $joinMarks->second_subject = $request->second_subject;
                $joinMarks->second_subject_code = $second_code;
                $joinMarks->new_subject = $request->new_subject;
                $joinMarks->class_name_id = $class;
                $joinMarks->save();
            }
        }
        return redirect('join/marks')->with('message', 'Join Marks Inserted Successfully');
    }

    public function viewJoinMarks() {
        $data['view_join_marks'] = DB::table('join_marks')
                ->join('subjects', 'join_marks.first_subject', '=', 'subjects.id')
                ->join('subjects as s', 'join_marks.second_subject', '=', 's.id')
                ->where('join_marks.status', 0)
                ->select('join_marks.*', 'subjects.subject_english as first_subject', 's.subject_english as second_subject')
                ->get();
        return view('admin.marks.join_marks_list', $data);
    }

    public function editJoinMarks($id) {
        $data['subjectsName'] = Subject::all();
        $data['classessName'] = ClassName::all();
        $data['join_marks'] = JoinMarks::find($id);
        return view('admin.marks.join_marks_edit', $data);
    }

    public function updateJoinMarks(Request $request) {
//        dd($request);
        $this->validate($request, [
            'first_subject' => 'required',
            'second_subject' => 'required',
            'new_subject' => 'required',
            'class_name_id' => 'required',
        ]);
        $first_code = @Subject::where('id', $request->first_subject)->first()->subject_code;
        $second_code = @Subject::where('id', $request->second_subject)->first()->subject_code;
        $joinMarks = JoinMarks::find($request->join_marks_id);
        $joinMarks->first_subject = $request->first_subject;
        $joinMarks->first_subject_code = $first_code;
        $joinMarks->second_subject = $request->second_subject;
        $joinMarks->second_subject_code = $second_code;
        $joinMarks->new_subject = $request->new_subject;
        $joinMarks->class_name_id = implode(',', $request->class_name_id);
        $joinMarks->save();
        return redirect('join/marks/view')->with('message', 'Join Marks Updated Successfully');
    }

    public function deleteJoinMarks($id) {
        $deleteJoin = JoinMarks::where('id', $id)
                ->update(['status' => 1]);
        return redirect('join/marks/view')->with('message', 'Join Marks Delete Successfully');
    }

}
