<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Post;
use App\ClassName;
use App\StudentMarks;
use App\Exam;
use App\Student;
use App\Page;
use App\Admission;
use App\AcademicCalender;
use Session;
use App\Routine;
use App\Examroutine;
use App\Slider;
use App\Teacher;
use App\Gallery;
use App\Group;
use App\LeaveApplication;
use App\ManagingCommittee;
use App\Result;
use App\GPARange;
use App\SystemSetting;
use PDF;
use DB;



class FrontController extends Controller {

    public function index() {
        $data['setting'] = @Setting::first();
        $data['system_setting'] = @SystemSetting::first();
        $data['posts'] = @Post::all();
        $data['sliders'] = @Slider::where('status',0)->orWhere('status',NULL)->get();
        $data['student'] = @Student::all();
        $data['teachers'] = @Teacher::all();
        $data['galleries'] = @Gallery::where('status',0)->orWhere('status',NULL)->orderBy('id', 'DESC')->take(8)->get();
        $data['classes'] = @ClassName::all();
        $data['page'] = Page::where('slug', 'message')->first();
         $data['page'] = Page::where('slug', 'our-history')->first();
        // $data['pages']=@Page::all();
        return view('front.home.home_content', $data);
    }

    public function result(Request $request) {
        $data = [];
        $data['not_found'] = '';
//        $data['not_found'] = 'Fill up the form';
        $data['exams'] = Exam::all();
//        $data['classNames'] = className::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['studentMarks'] = StudentMarks::all();
        $data['setting'] = Setting::first();

        $data['exam_name'] = @Exam::where('id', @$request->exam_id)->first()->examName;
        $data['student_group'] = @Student::where('student_id', @$request->student_id)->first()->studentGroup;

        $data['studentinfo'] = @DB::table('students')
                        ->join('class_names', 'students.classNameId', '=', 'class_names.id')
                         ->join('student_academics', 'students.classNameId', '=', 'class_names.id')
                        ->where('student_id', $request->student_id)
                        ->select('students.id', 'students.name', 'students.father', 'students.mother', 'students.student_id', 'students.roll', 'students.section', 'class_names.id', 'class_names.classNameEnglish')
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
        $data['setting'] = @Setting::first();
        return view('front.result.result', $data);
    }

    public function page_details($id) {
        //  dd($id);
        $data['page'] = Page::where('id', $id)->first();
        // dd($page);
        return view('front.pages.page_details', $data);
    }

    /* show Admission */

    public function showAdmission() {
//        $data['classes'] = @ClassName::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        
        $array = explode(',', $settingClass);
        
        $data['classes'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        $data['groups'] = @Group::all();
        return view('front.pages.online_admission', $data);
    }

    /* store Admission */

    public function storeAdmision(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'class_name_id' => 'required',
            'student_group' => 'required',
            'date_time' => 'required',
            'nationality' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'occupation' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'contuct_number' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $image = $request->file('image');
        $uploadPath = 'public/images/admission/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $admission = new Admission;
        $admission->name = $request->name;
        $admission->gender = $request->gender;
        $admission->class_name_id = $request->class_name_id;
        $admission->student_group = $request->student_group;
        $admission->date_time = $request->date_time;
        $admission->nationality = $request->nationality;
        $admission->father_name = $request->father_name;
        $admission->mother_name = $request->mother_name;
        $admission->occupation = $request->occupation;
        $admission->present_address = $request->present_address;
        $admission->permanent_address = $request->permanent_address;
        $admission->contuct_number = $request->contuct_number;
        $admission->image = $imageUrl;
        $admission->save();
        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }

    /* Routine */

    public function showRoutine() {
        $data['routine'] = Routine::first();
        $data['routines'] = Routine::orderBy('id','desc')->get();
        return view('front.pages.routine', $data);
    }

    /* exam routine */

    public function showExamroutine() {
        $data['exam_routine'] = Examroutine::first();
        $data['exam_routines'] = Examroutine::orderBy('id','desc')->get();
        return view('front.pages.exam_routine', $data);
    }

    public function postDetails($slug) {
        $data['post_details'] = Post::where('slug', $slug)->first();
        return view('front.pages.post_details', $data);
    }

    public function pageDetails($slug) {
        $data['page_details'] = Page::where('slug', $slug)->first();
        return view('front.pages.page_details', $data);
    }

    public function contactUs() {
        $data = [];
        return view('front.pages.contact_us', $data);
    }

    // public function academic() {
    //     $data = [];
    //     return view('front.pages.academic', $data);
    // }

    /* gallery show all */
    public function showGalleries() {
        $data['galleries'] = Gallery::where('status',0)->orWhere('status',NULL)->paginate(4);
        return view('front.pages.gallery', $data);
    }

    /* show Event */

    public function showEvent($type) {
        $data['events'] = Post::where('type', $type)->paginate(3);
        return view('front.pages.event', $data);
    }

    /* show type */

    public function showNotice($type) {
        $data['event_notice'] = Post::where('type', $type)->paginate(4);
        return view('front.pages.event_notice', $data);
    }

    /* academic */

    public function showAcademic() {
        $data['academics'] = AcademicCalender::orderBy('id','desc')->get();
        return view('front.pages.academic', $data);
    }


/*leave application*/

    public function leave_application_create()
    {
        return view('front.pages.leave_application');
    }

    public function leave_application_store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'purpose'=>'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'message' => 'required',
        ]);

        $leave_application = new LeaveApplication;
        $leave_application->name = $request->name;
        $leave_application->purpose = $request->purpose;
        $leave_application->start_time = $request->start_time;
        $leave_application->end_time = $request->end_time;
        $leave_application->message = $request->message;
        $leave_application->save();
        Session::flash('message', 'Application Submitted Successfully');
        return redirect()->back();

    }

   /*show managing committee*/
    public function show_managing_committee()
    {
        $data['managing_committees'] = ManagingCommittee::all();
        return view('front.pages.show_managing_committee',$data);
    }
    
    
    public function frontResultDownload(Request $request) {
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



    /*attendance 27-1-2019*/

    public function showAttendance()
    {
        return view('front.pages.attendance');
    }

    /*visitor counter 27-1-2019*/
    public function visitorCounter(Request $request)
    {
        
    }
    
}
