<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subject;
use App\SubjectMark;
use App\ClassName;

class SubjectMarkController extends Controller {

    public function index() {
        $data['subjects'] = Subject::all();
//        $data['classNams'] = ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classNams'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        return view('admin.settings.marks_setting', $data);
    }

    public function subjectMark(Request $request) {

//        $this->validate($request, [
//            'full_mark' => 'required',
//            'class_id' => 'required',
//            'subjectId' => 'required',
//        ]);
//        dd($request);
        $subject_code = Subject::where('id', $request->subjectId)->first()->subject_code;
        $class_ids = @$request->class_id;
        if ($class_ids) {
            foreach ($class_ids as $class_id) {
                $SubjectMark = new SubjectMark;
                $SubjectMark->subjectId = $request->subjectId;
                $SubjectMark->class_id = @$class_id;
                $SubjectMark->subject_code = $subject_code;
                $SubjectMark->full_mark = $request->full_mark;
                $SubjectMark->ca = $request->ca;
                $SubjectMark->cr = $request->cr;
                $SubjectMark->mcq = $request->mcq;
                $SubjectMark->pr = $request->pr;
                $SubjectMark->save();
            }
        } else {
            $SubjectMark = new SubjectMark;
            $SubjectMark->subjectId = $request->subjectId;
            $SubjectMark->subjectCode = $subject_code;
            $SubjectMark->full_mark = $request->full_mark;
            $SubjectMark->ca = $request->ca;
            $SubjectMark->cr = $request->cr;
            $SubjectMark->mcq = $request->mcq;
            $SubjectMark->pr = $request->pr;
            $SubjectMark->save();
        }
        return redirect('subject/mark/add')->with('message', 'Subject Marks Create Successfully');
    }

    public function subjectMarkList() {
        $data['marks_list'] = DB::table('subject_marks')
                        ->join('subjects', 'subject_marks.subjectCode', '=', 'subjects.subject_code')
//                        ->join('class_names', 'subject_marks.class_id', '=', 'class_names.id')
                        ->select('subject_marks.*', 'subjects.subject_english')->paginate(10);
        return view('admin.settings.marks_setting_list', $data);
    }

    public function subjectMarkEdit($id) {
        $data['subjects'] = Subject::all();
//        $data['classNams'] = ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classNams'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['marks_edit'] = SubjectMark::find($id);
        return view('admin.settings.marks_setting_edit', $data);
    }

    public function subjectMarkUpdate(Request $request) {
        $this->validate($request, [
            'full_mark' => 'required',
            'class_id' => 'required',
            'subjectId' => 'required',
        ]);
        $subject_code = Subject::where('id', $request->subjectId)->first()->subject_code;
//            dd($subject_code);
        $SubjectMark = SubjectMark::find($request->markId);
        $SubjectMark->subjectId = $request->subjectId;
//        $SubjectMark->class_id = implode(',', $request->class_id);
        $SubjectMark->subject_code = $subject_code;
        $SubjectMark->full_mark = $request->full_mark;
        $SubjectMark->ca = $request->ca;
        $SubjectMark->cr = $request->cr;
        $SubjectMark->mcq = $request->mcq;
        $SubjectMark->pr = $request->pr;
        $SubjectMark->save();

        return redirect('subject/mark/list')->with('message', 'Subject Marks Update Successfully');
    }

    public function subject_marks_check(Request $request) {
        $subject_code = $request->subject_code;
        $marks_class_name = $request->marks_class_name;

        $mark_with_class = @SubjectMark::where('subject_code', $subject_code)->where('class_id', $marks_class_name)->orderBy('id', 'desc')->first();
        $mark_without_class = @SubjectMark::where('subject_code', $subject_code)->where('class_id', null)->orWhere('class_id', '')->orderBy('id', 'desc')->first();
        
        if($mark_with_class) {
            $subject_mark = $mark_with_class;
        } else if($mark_without_class) {
            $subject_mark = $mark_without_class;
        }

        $json_data = array(
            "full_mark" => @$subject_mark->full_mark,
            "ca" => @$subject_mark->ca,
            "cr" => @$subject_mark->cr,
            "mcq" => @$subject_mark->mcq,
            "pr" => @$subject_mark->pr,
        );
        return response()->json($json_data);
    }

}
