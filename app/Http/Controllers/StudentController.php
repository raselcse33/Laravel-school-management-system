<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\ClassName;
use App\Section;
use App\Group;
use App\Subject;
use App\Biology;
use App\Admission;
use App\StudentSubject;
use App\StudentAcademic;
use App\SuccessfulStudent;
use DB;
use PDF;
use Session;

class StudentController extends Controller {

    public function create() {
        // $data['subjects']=Subject::all();
        $data['subjects'] = DB::table('subjects')->join('groups', 'subjects.group_name', '=', 'groups.id')->select('subjects.*', 'groups.groupName')->get();
        // dd($data);
        $data['settings'] = DB::table('settings')->first();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
                        
        
        $array = explode(',', $settingClass);
            
        $data['className'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();

        $data['section']=Section::all();
        $data['religion_subjects']= Subject::where('religion_subject',1)->get();
        $data['group']=Group::all();
        return view('admin.students.student_add', $data);
    }

    public function store(Request $request) {

//        dd($request);
        $this->validate($request, [
            'name' => 'required',
            'roll' => 'required|max:11',
            'student_id' => 'required|unique:students|max:11',
            'class_id' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'phone_number' => 'required|max:11|min:11',
            'image' => 'required|mimes:jpg,png,jpeg',
            'date_of_birdth' => 'required',
            'religion' => 'required'
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $uploadPath = 'public/images/students/';
            $image_filename = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($uploadPath, $image_filename);
        }
        $student = new Student;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->father = $request->father;
        $student->mother = $request->mother;
        $student->village = $request->village;
        $student->post = $request->post;
        $student->thana = $request->thana;
        $student->district = $request->district;
        $student->phone_number = $request->phone_number;
        $student->email = $request->email;
        $student->occupation = $request->occupation;
        $student->image = $image_filename;
        $student->guardian = $request->guardian;
        $student->guardian_village = $request->guardian_village;
        $student->guardian_post = $request->guardian_post;
        $student->guardian_thana = $request->guardian_thana;
        $student->guardian_district = $request->guardian_district;
        $student->present_address = $request->present_address;
        $student->permanent_address = $request->permanent_address;
        $student->date_of_birdth = $request->date_of_birdth;
        $student->nationality = $request->nationality;
        $student->religion = $request->religion;
        $student->save();
        $id = $student->id;
//        dd($id);
        $student_academic = new StudentAcademic;
        $student_academic->student_table_id = $id;
        $student_academic->class_id = $request->class_id;
        $student_academic->student_id = $request->student_id;
        $student_academic->section_id = $request->section_id;
        $student_academic->roll = $request->roll;
        $student_academic->study_year = $request->study_year;
        $student_academic->roll = $request->roll;
        $student_academic->save();
        
        $academic_id=$student_academic->id;
        
        $student_subject = new StudentSubject;
        $student_subject->student_table_id = $id;
        $student_subject->student_id = $request->student_id;
        $student_subject->academic_id = $academic_id;
        $student_subject->student_group = $request->student_group;
        $student_subject->religion_subject = $request->religion_subject;
        if (!$request->compulsory_subjects) {
            $student->compulsory_subjects = $request->compulsory_subjects;
        } else {
            $student->compulsory_subjects = implode(',', $request->compulsory_subjects);
        }
        $student_subject->fourth_subject = $request->fourth_subject;
        $student_subject->study_year = $request->study_year;
        $student_subject->save();

        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }

    /* Show student */

    public function showStudent() {
//        $data['students'] = DB::table('students')
////                ->join('class_names', 'students.class_id', '=', 'class_names.id')
//                ->join('student_academics', 'students.student_id', '=', 'student_academics.student_id')
//                ->join('student_subjects', 'students.student_id', '=', 'student_subjects.student_id')
////                ->select('students.id', 'students.name', 'students.student_id',  'students.image','student_academics.section','student_subjects.student_group')
//                ->paginate(10);
        $data['students'] = Student::paginate(15);
        return view('admin.students.student_list', $data);
    }

    public function viewStudent($id) {
//        dd($id);
        $data['student_info'] = Student::find($id);
        return view('admin.students.student_view', $data);
    }

    /* edit student */

    public function editStudent($id) {
        $data['student'] = Student::find($id);
        $data['className'] = ClassName::all();
        $data['section'] = Section::all();
        $data['group'] = Group::all();
        $data['subjects'] = DB::table('subjects')->join('groups', 'subjects.group_name', '=', 'groups.id')->select('subjects.*', 'groups.groupName')->get();
        return view('admin.students.update_student', $data);
    }

    /* update Student */

    public function updateStudent(Request $request, $id) {
//        dd($id);
        $this->validate($request, [
            'name' => 'required',
            'student_id' => 'required|max:11|unique:students,student_id,' . $request->id,
            'father' => 'required',
            'mother' => 'required',
            'phone_number' => 'required|max:11|min:11',
            'image' => 'mimes:jpg,png,jpeg',
            'date_of_birdth' => 'required',
            'religion' => 'required'
        ]);
        if (!$request->file('image')) {
            $student = Student::find($id);
//            dd($student);
            $student_academic = StudentAcademic::where('student_table_id', $id)->update(['student_id' => $request->student_id]);
            $student_subject = StudentSubject::where('student_table_id', $id)->update(['student_id' => $request->student_id]);
            $student->name = $request->name;
            $student->student_id = $request->student_id;
            $student->father = $request->father;
            $student->mother = $request->mother;
            $student->village = $request->village;
            $student->post = $request->post;
            $student->thana = $request->thana;
            $student->district = $request->district;
            $student->phone_number = $request->phone_number;
            $student->email = $request->email;
            $student->occupation = $request->occupation;
//            $student->image = $image_filename;
            $student->guardian = $request->guardian;
            $student->guardian_village = $request->guardian_village;
            $student->guardian_post = $request->guardian_post;
            $student->guardian_thana = $request->guardian_thana;
            $student->guardian_district = $request->guardian_district;
            $student->present_address = $request->present_address;
            $student->permanent_address = $request->permanent_address;
            $student->date_of_birdth = $request->date_of_birdth;
            $student->nationality = $request->nationality;
            $student->religion = $request->religion;
            $student->save();
            Session::flash('message', 'Update Successfully');
            return redirect('student/list');
        } else {
            $student = Student::find($id);
            $image = $request->file('image');
            $uploadPath = 'public/images/students/';
            $image_filename = rand(11111, 99999) . '.' . $image->getClientOriginalExtension();
            $image->move($uploadPath, $image_filename);
            $imageun = @$student->image;
            @unlink('public/images/students/' . $imageun);
            $student_academic = StudentAcademic::where('id', $id)->update(['student_id' => $request->student_id]);
            $student_subject = StudentSubject::where('id', $id)->update(['student_id' => $request->student_id]);
            $student->name = $request->name;
            $student->student_id = $request->student_id;
            $student->father = $request->father;
            $student->mother = $request->mother;
            $student->village = $request->village;
            $student->post = $request->post;
            $student->thana = $request->thana;
            $student->district = $request->district;
            $student->phone_number = $request->phone_number;
            $student->email = $request->email;
            $student->occupation = $request->occupation;
            $student->image = $image_filename;
            $student->guardian = $request->guardian;
            $student->guardian_village = $request->guardian_village;
            $student->guardian_post = $request->guardian_post;
            $student->guardian_thana = $request->guardian_thana;
            $student->guardian_district = $request->guardian_district;
            $student->present_address = $request->present_address;
            $student->permanent_address = $request->permanent_address;
            $student->date_of_birdth = $request->date_of_birdth;
            $student->nationality = $request->nationality;
            $student->religion = $request->religion;
            $student->save();
            Session::flash('message', 'Update Successfully');
            return redirect('student/list');
        }
    }
    public function academicStudent() {
        $data['academics']=DB::table('student_academics')
                                ->join('students','students.student_id','=','student_academics.student_id')
                                ->join('class_names','class_names.id','=','student_academics.class_id')
                                ->orderBy('student_academics.student_id','desc')
                                ->select('student_academics.*','students.name','class_names.classNameEnglish')
                                ->paginate(15);
//        dd($data['academics']);
        return view('admin.students.academic_list',$data);
    }
    public function subjectStudent() {
        $data['subjects']=DB::table('student_subjects')
                                ->join('students','students.student_id','=','student_subjects.student_id')
                                ->join('subjects','subjects.subject_code','=','student_subjects.religion_subject')
                                ->orderBy('student_subjects.student_id','desc')
                                ->select('student_subjects.*','students.name')
                                ->paginate(15);
//        dd($data['subject']);
        return view('admin.students.subject_list',$data);
    }
    public function admissionView() {
        $data['admission'] = DB::table('admissions')
                ->join('class_names', 'admissions.class_id', '=', 'class_names.id')
                ->select('admissions.*', 'class_names.classNameEnglish')
                ->paginate(10);
        return view('admin.students.admission_list', $data);
    }

    public function admissionViewInfo() {
        
    }

    public function admissionStudentView($id) {
        $data['admission_student'] = DB::table('admissions')
                ->join('class_names', 'admissions.class_id', '=', 'class_names.id')
                ->where('admissions.id', $id)
                ->select('admissions.*', 'class_names.classNameEnglish')
                ->first();
        return view('admin.students.admission_student_view', $data);
    }



    /*successful student
    * work by rasel
    */

    public function createSuccessfulStudent()
    {
        $data['successful_students'] = SuccessfulStudent::where('status',0)->get();
        return view('admin.students.successful_student',$data);
    }

    public function storeSuccessfulStudent(Request $request)
    {

        // dd($request);
        $this->validate($request, [
            'name' => 'required',
            'letter_grade'=>'required',
            'grade_point'=>'required',
             'year'=>'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $image = $request->file('image');
        $uploadPath = 'public/images/successful_student/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $successful_student = new SuccessfulStudent;
        $successful_student->name = $request->name;
        $successful_student->letter_grade = $request->letter_grade;
        $successful_student->grade_point = $request->grade_point;
        $successful_student->year = $request->year;
        $successful_student->image = $imageUrl;
        $successful_student->save();
        return redirect('successful/student/create')->with('message', 'Successful Student Created Successfully');
    }
    
    public function editSuccessfulStudent($id)
    {
        $data['successful_student']= SuccessfulStudent::find($id); 
        return view('admin.students.edit_successful_student',$data);
    }

    public function updateSuccessfulStudent(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
            'letter_grade'=>'required',
            'grade_point'=>'required',
             'year'=>'required',
            'image' => 'mimes:jpg,png,jpeg'
        ]);
        $successful_student= SuccessfulStudent::find($id);
        $image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/successful_student/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $oldImage=$successful_student->image;
            @unlink($uploadPath.$oldImage);
            $image->move($uploadPath, $imageName);
            $successful_student->name = $request->name;
            $successful_student->letter_grade = $request->letter_grade;
            $successful_student->grade_point = $request->grade_point;
            $successful_student->year = $request->year;
            $successful_student->image = $imageUrl;
            $successful_student->save();
            return redirect('successful/student/create')->with('message', 'Successful Student Update Successfully');
        } else {
            $successful_student->name = $request->name;
            $successful_student->letter_grade = $request->letter_grade;
            $successful_student->grade_point = $request->grade_point;
            $successful_student->year = $request->year;
            $successful_student->save();
            return redirect('successful/student/create')->with('message', 'Successful Student Update Successfully');
        }
        
    }

    public function deleteSuccessfulStudent($id)
    {
        $successful_student = SuccessfulStudent::find($id);
        $successful_student->status = 1;
        $successful_student->save();
          return redirect('successful/student/create')->with('message', 'Successful Student Deleted  Successfully');
    }


    /*search student 27-1-2019*/

    public function searchStudent()
    {
        $data['classNames'] = ClassName::all();
        $data['groupNames'] = Group::all();
        $data['sections']   = Section::all();
        return view('admin.students.search_student',$data);
    }

    public function createStudentId(Request $request)
    {

         if (isset($_POST['submit'])) {
//            dd($data['students']);
                $pdf = PDF::loadView('admin.students.student_id_pdf');
                return $pdf->download('student_id_pdf.pdf');
            }
        

         $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
      
        $array = explode(',', $settingClass);
        
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();

        $data['groupNames'] = Group::all();
        $data['sections']   = Section::all();
        return view('admin.students.create_student_id',$data);
    }


}
