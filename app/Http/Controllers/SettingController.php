<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\ClassName;
use App\Section;
use App\Group;
use App\Subject;
use App\GPARange;
use App\Exam;
use App\Slider;
use App\AcademicCalender;
use Image;
use App\Gallery;
use App\Routine;
use App\Examroutine;
use App\UsefulLink;
use App\PassMark;
use App\ResultPublished;
use App\SystemSetting;
use DB;
use File;
use Session;


// use Image;
class SettingController extends Controller {

    //
    public function index() {

        $data['setting'] = Setting::first();
        $data['classNames'] = ClassName::all();

        return view('admin.settings.add_setting', $data);
    }


    public function add_setting(Request $request) {
        $this->validate($request, [
            'name' => 'required|string',
            'name_bangla' => 'required|string',
            'email' => 'required',
            'eiin' => 'max:11',
            'phone_number' => 'required|max:11|min:11',
            'telephone_number' => 'max:11',
            'school_time' => 'required',
            'class_name_id' => 'required',
            'eastablished' => 'required',
            'logo' => 'mimes:jpg,png,jpeg',
            'banner' => 'mimes:jpg,png,jpeg,gif',
            'flag' => 'mimes:jpg,png,jpeg,gif',
            'icon' => 'mimes:jpg,png,jpeg',
            'signature' => 'mimes:jpg,png,jpeg',
        ]);

        $old_setting = Setting::first();
        $image = $request->file('logo');
        $banner = $request->file('banner');
        $flag = $request->file('flag');
        $icon = $request->file('icon');
        $signature = $request->file('signature');
        if ($image) {
            $uploadPath = 'public/images/settings/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = 'logo'.time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $imageun = @$old_setting->logo;
            @unlink('public/images/settings/' . $imageun);
        } else {
            $imageUrl = @$old_setting->logo;
        }
        if ($banner) {
            $uploadPath = 'public/images/settings/';
            $imageEx = $banner->getClientOriginalExtension();
            $imageName = 'banner'.time() . '.' . $imageEx;
            $bannerUrl = $imageName;
            $banner->move($uploadPath, $imageName);
            $imageun = @$old_setting->banner;
            @unlink('public/images/settings/' . $imageun);
        } else {
            $bannerUrl = @$old_setting->banner;
        }
        if ($flag) {
            $uploadPath = 'public/images/settings/';
            $imageEx = $flag->getClientOriginalExtension();
            $imageName = 'flag'.time() . '.' . $imageEx;
            $flagUrl = $imageName;
            $flag->move($uploadPath, $imageName);
            $imageun = @$old_setting->flag;
            @unlink('public/images/settings/' . $imageun);
        } else {
            $flagUrl = @$old_setting->flag;
        }
        if ($icon) {
            $uploadPath = 'public/images/settings/';
            $imageEx = $icon->getClientOriginalExtension();
            $imageName = 'icon'.time() . '.' . $imageEx;
            $iconUrl = $imageName;
            $icon->move($uploadPath, $imageName);
            $imageun = @$old_setting->icon;
            @unlink('public/images/settings/' . $imageun);
        } else {
            $iconUrl = @$old_setting->icon;
        }
        if ($signature) {
            $uploadPath = 'public/images/settings/';
            $imageEx = $signature->getClientOriginalExtension();
            $imageName = 'signature'.time() . '.' . $imageEx;
            $signatureUrl = $imageName;
            $signature->move($uploadPath, $imageName);
            $imageun = @$old_setting->signature;
            @unlink('public/images/settings/' . $imageun);
        } else {
            $signatureUrl = @$old_setting->signature;
        }
        $setting = Setting::firstOrNew(array('name' => @$old_setting->name));
        $setting->name = $request->name;
        $setting->name_bangla = $request->name_bangla;
        $setting->slogan = $request->slogan;
        $setting->email = $request->email;
        $setting->institute_code = $request->institute_code;
        $setting->mpo_code = $request->mpo_code;
        $setting->eiin = $request->eiin;
        $setting->address = $request->address;
        $setting->phone_number = $request->phone_number;
        $setting->telephone_number = $request->telephone_number;
        $setting->school_time = $request->school_time;
        $setting->eastablished = $request->eastablished;
        $setting->class_name_id = implode(',', $request->class_name_id);
        $setting->description = $request->description;
        $setting->widgetone = $request->widgetone;
        $setting->widgettwo = $request->widgettwo;
        $setting->metakeyword = $request->metakeyword;
        $setting->metadescription = $request->metadescription;
        $setting->logo = $imageUrl;
        $setting->banner = $bannerUrl;
        $setting->flag = $flagUrl;
        $setting->icon = $iconUrl;
        $setting->signature = $signatureUrl;
        $setting->authorurl = $request->authorurl;
        $setting->mapurl = $request->mapurl;
        $setting->save();

        return redirect('setting/create')->with('message', 'Setting Saved Successfully');
    }
    public function deleteBanner($id) {
        $banner=Setting::find($id);
//        dd($banner);
        $imgunlink=$banner->banner;
        DB::table('settings')
            ->where('banner', $imgunlink)
            ->update(['banner'=>NULL]);
        @unlink('public/images/settings/' . $imgunlink);
        return redirect('setting/create')->with('message','Banner Delete Successfully');
    }

    /* ClassName start */

   

    public function createClass(Request $request) {
        $this->validate($request, [
            'classNameEnglish' => 'required|string',
            'classNameBangla' => 'required|string',
        ]);
        $class = new ClassName;
        $class->classNameEnglish = $request->classNameEnglish;
        $class->classNameBangla = $request->classNameBangla;
        $class->save();
        return redirect('class/create')->with('message', 'Class Created Successfully');
    }
    public function editClass($id) {
        $data['editClass']= ClassName::find($id);
        return view('admin.settings.edit_class', $data);
    }
    public function updateClass(Request $request) {
        $this->validate($request, [
            'classNameEnglish' => 'required|string',
            'classNameBangla' => 'required|string',
        ]);
        $updateClass= ClassName::find($request->classNameId);
        $updateClass->classNameEnglish = $request->classNameEnglish;
        $updateClass->classNameBangla = $request->classNameBangla;
        $updateClass->save();
        return redirect('class/create')->with('message', 'Class Updated Successfully');
    }
     


    /* ClassName end */

    /* Section start */

    

    public function storeSection(Request $request) {
        $r = request();
        $this->validate($r, [
            'section' => 'required|unique:sections,section'
        ]);

        Section::create([
            'section' => $request->section
        ]);
        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }
    public function editSection($id) {
    $data['editSection']=Section::find($id);
        return view('admin.settings.edit_section',$data);
    }
    public function updateSection(Request $request) {
        $this->validate($request, [
            'section'=>'required|unique:sections,section,'.$request->sectionId,
        ]);
    $updateSection=Section::find($request->sectionId);
    $updateSection->section=$request->section;
    $updateSection->save();
    return redirect('section/create')->with('message', 'Section Updated Successfully');
    }
    /* Section end */
    /* Group start */

    
    public function storeGroup(Request $request) {
        $r = request();
        $this->validate($r, [
            'groupName' => 'required|unique:groups,groupName'
        ]);

        Group::create([
            'groupName' => $request->groupName
        ]);
        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }
    public function editGroup($id) {
        $data['editGroup']=Group::find($id);
        return view('admin.settings.edit_group',$data);
    }
    public function updateGroup(Request $request) {
        $this->validate($request, [
            'groupName'=>'required|unique:groups,groupName,'.$request->groupId,
        ]);
        $updateGroup=Group::find($request->groupId);
        $updateGroup->groupName=$request->groupName;
        $updateGroup->save();
        return redirect('group/create')->with('message', 'Group Updated Successfully');
    }
    /* Group end */
    /* Subject start */

    

    public function createSubject(Request $request) {

        $this->validate($request, [
            'subject_english' => 'required',
            'subject_bangla' => 'required',
            'subject_code' => 'required|unique:subjects',
            'group_name' => 'required',
            'class_id' => 'required'
        ]);
        $subject = new Subject;
        $subject->subject_english = $request->subject_english;
        $subject->subject_bangla = $request->subject_bangla;
        $subject->subject_code = $request->subject_code;
        $subject->group_name = implode(',',$request->group_name);
        $subject->class_id = implode(',',$request->class_id);
        $subject->summary = $request->summary;
        $subject->description = $request->description;
        $subject->religion_subject = $request->religion_subject;
        $subject->not_effect = $request->not_effect;
        $subject->subject_common = $request->subject_common;
        $subject->save();
        return redirect('subject/add')->with('message', 'Subject Created Successfully');
    }
    public function editSubject($id) {
        $data['edit_subject'] = Subject::find($id);
        $data['groups'] = Group::all();
        $setting_class = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
//        dd($setting_class);
        $array = explode(',', $setting_class);
        $data['classess'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        return view('admin.settings.edit_subject',$data);
    }

    
    public function updateSubject(Request $request) {

        $this->validate($request, [
            'subject_english' => 'required',
            'subject_bangla' => 'required',
            'subject_code' => 'required|unique:subjects,subject_code,'.$request->subject_id,
            'group_name' => 'required',
            'class_id' => 'required'
        ]);
        $subject = Subject::find($request->subject_id);
        $subject = new Subject;
        $subject->subject_english = $request->subject_english;
        $subject->subject_bangla = $request->subject_bangla;
        $subject->subject_code = $request->subject_code;
        $subject->group_name = implode(',',$request->group_name);
        $subject->class_id = implode(',',$request->class_id);
        $subject->summary = $request->summary;
        $subject->description = $request->description;
        $subject->religion_subject = $request->religion_subject;
        $subject->subject_common = $request->subject_common;
        if($request->not_effect){
            $subject->not_effect = $request->not_effect;
        }else{
            $subject->not_effect = 0;
        }
        if($request->religion_subject){
            $subject->religion_subject = $request->religion_subject;
        }else{
            $subject->religion_subject = 0;
        }
        $subject->save();
        return redirect('subject/add')->with('message', 'Subject Update Successfully');
    }
    /* Subject end */
    /* Gpa Range start */

  

    public function storeGpaRange(Request $request) {
        $r = request();
        $this->validate($r, [
            'markRange' => 'required',
            'grade' => 'required',
            'gpa' => 'required',
        ]);

        GPARange::create([
            'markRange' => $request->markRange,
            'grade' => $request->grade,
            'gpa' => $request->gpa
        ]);
        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }
    public function editGpaRange($id) {
        $data['gpa_range']=GPARange::find($id);
        return view('admin.settings.edit_gpa_range',$data);
    }
    public function updateGpaRange(Request $request) {
        $this->validate($request, [
            'markRange' => 'required',
            'grade' => 'required',
            'gpa' => 'required',
        ]);
        $gpa_range_update=GPARange::find($request->markRangeId);
        $gpa_range_update->markRange = $request->markRange;
        $gpa_range_update->grade = $request->grade;
        $gpa_range_update->gpa = $request->gpa;
        $gpa_range_update->save();
        return redirect('gpa/mark/add')->with('message', 'GPA Range Updated Successfully');
    }
    /* Gpa Range end */
    /* Exam start */

  
    public function storeExam(Request $request) {
        $r = request();
        $this->validate($r, [
            'examName' => 'required',
        ]);

        Exam::create([
            'examName' => $request->examName
        ]);

        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }
    public function editExam($id) {
            $data['edit_exam'] = Exam::find($id);
            return view('admin.settings.edit_exam', $data);
        }
    public function updateExam(Request $request) {
        $this->validate($request, [
            'examName'=>'required'
        ]);
            $updateExamName = Exam::find($request->examNameId);
            $updateExamName->examName=$request->examName;
            $updateExamName->save();
            return redirect('exam/create')->with('message','Update Exam Name Successfully');
        }
    /* Exam end */

    /* slider show */

    public function showSlider() {
        $data['sliders'] = Slider::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.slider', $data);
    }

    /* store Slider */

    public function storeSlider(Request $request) {
        // dd($request);
        $this->validate($request, [
            'title' => 'required',
            'slider' => 'required|mimes:jpg,png,jpeg'
        ]);
        $image = $request->file('slider');
        $uploadPath = 'public/images/sliders/';
        $sliderEx = $image->getClientOriginalExtension();
        $sliderName = time() . '.' . $sliderEx;
        $imageUrl = $sliderName;
        $image->move($uploadPath, $sliderName);
        $slider = new Slider;
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->content = $request->content;
        $slider->slider = $imageUrl;
        $slider->save();
        return redirect('slider/create')->with('message', 'Slider Created Successfully');
    }
    public function editSlider($id) {
       $data['slider_edit']= Slider::find($id);
       return view('admin.settings.edit_slider',$data);
    }
    public function updateSlider(Request $request) {
        // dd($request);
        $this->validate($request, [
            'title' => 'required',
            'slider' => 'mimes:jpg,png,jpeg'
        ]);
        $sliderUpdate= Slider::find($request->sliderId);
        $image = $request->file('slider');
        if($image){
            $uploadPath = 'public/images/sliders/';
            $sliderEx = $image->getClientOriginalExtension();
            $sliderName = time() . '.' . $sliderEx;
            $imageUrl = $sliderName;
            $oldImage=$sliderUpdate->slider;
            @unlink($uploadPath.$oldImage);
            $image->move($uploadPath, $sliderName);
            $sliderUpdate->title = $request->title;
            $sliderUpdate->sub_title = $request->sub_title;
            $sliderUpdate->content = $request->content;
            $sliderUpdate->slider = $imageUrl;
            $sliderUpdate->save();
            return redirect('slider/create')->with('message', 'Slider Updated Successfully');
        } else {
            $sliderUpdate->title = $request->title;
            $sliderUpdate->sub_title = $request->sub_title;
            $sliderUpdate->content = $request->content;
            $sliderUpdate->save();
            return redirect('slider/create')->with('message', 'Slider Updated Successfully');
        }
        
    }
    public function deleteSlider($id) {
        $slider=Slider::where('id',$id)->update(['status'=>1]);
        return redirect('slider/create');
    }
    /* show gallery */

    public function showGallary() {
        $data['gallery'] = Gallery::where('status',NULL)->orWhere('status',NULL)->get();
        return view('admin.settings.add_gallery', $data);
    }

    /* store gallery */

    public function storeGallary(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg'
        ]);
        $image = $request->file('image');
        $uploadPath = 'public/images/gallery/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $gallery = new Gallery;
        $gallery->title = $request->title;
        $gallery->image = $imageUrl;
        $gallery->save();
        return redirect('gallary/create')->with('message', 'Gallery Created Successfully');
    }
    public function editGallery($id) {
        $data['gallery_edit']= Gallery::find($id);
        return view('admin.settings.edit_gallery',$data);
    }
    public function updateGallery(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:jpg,png,jpeg'
        ]);
        $updateGallery= Gallery::find($request->galleryId);
        $image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/gallery/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $oldImage=$updateGallery->image;
            @unlink($uploadPath.$oldImage);
            $updateGallery->title = $request->title;
            $updateGallery->image = $imageUrl;
            $updateGallery->save();
            return redirect('gallary/create')->with('message', 'Gallery Update Successfully');
        }else{
            $updateGallery->title = $request->title;
            $updateGallery->save();
            return redirect('gallary/create')->with('message', 'Gallery Update Successfully');
        }
        
    }
    public function deleteGallery($id) {
        $gallery= Gallery::where('id',$id)->update(['status'=>1]);
        return redirect('gallary/create');
    }
    /* Routine */

    public function routineStore(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,pdf,png'
        ]);

        $image = $request->file('image');
        $uploadPath = 'public/images/routine/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $routine = new Routine;
        $routine->title = $request->title;
        $routine->image = $imageUrl;
        $routine->save();
        return redirect('routine/create')->with('message', 'Routine Inserted Successfully');
    }

    public function editRoutine($id) {
        $data['edit_routine'] = Routine::find($id);
        return view('admin.settings.edit_routine', $data);
    }
    /* Exam */

    public function updateRoutine(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:jpg,pdf,png'
        ]);
        $classRoutine= Routine::find($request->routineId);
        $image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/routine/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath,$imageName);
            $oldImage=$classRoutine->image;
            unlink($uploadPath.$oldImage);
            $classRoutine->title = $request->title;
            $classRoutine->image = $imageUrl;
            $classRoutine->save();
            return redirect('routine/create')->with('message', 'Routine Updated Successfully');
        }else{
            $classRoutine->title = $request->title;
            $classRoutine->save();
            return redirect('routine/create')->with('message', 'Routine Updated Successfully');
        }
        
        
    }
   

    public function storeExamRoutine(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|mimes:jpg,pdf,png'
        ]);
        $image = $request->file('image');
        $uploadPath = 'public/images/exam_routine/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $exam_routine = new Examroutine;
        $exam_routine->title = $request->title;
        $exam_routine->image = $imageUrl;
        $exam_routine->save();
        return redirect('exam/routine/create')->with('message', 'Exam Routine Inserted Successfully');
    }
    public function editExamRoutine($id) {
        $data['edit_exam_routine'] = Examroutine::find($id);
        return view('admin.settings.edit_exam_routine', $data);
    }
    public function updateExamRoutine(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:jpg,pdf,png'
        ]);
        $update_exam_routine= Examroutine::find($request->exam_routine_id);
        $image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/exam_routine/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $oldImage=$update_exam_routine->image;
            @unlink($uploadPath.$oldImage);
            $update_exam_routine->title = $request->title;
            $update_exam_routine->image = $imageUrl;
            $update_exam_routine->save();
            return redirect('exam/routine/create')->with('message', 'Exam Routine Updated Successfully');
        } else {
            $update_exam_routine->title = $request->title;
            $update_exam_routine->save();
            return redirect('exam/routine/create')->with('message', 'Exam Routine Updated Successfully');
        }
        
    }
    
    public function storeAcademic(Request $request) {
        
//        dd($request);
        $this->validate($request, [
            'title'=>'required',
            'image'=>'required|mimes:pdf,jpeg,jpg,png',
        ]);
        $image=$request->file('image');
        $uploadPath = 'public/images/academic_calender/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $calender=new AcademicCalender;
        $calender->title=$request->title;
        $calender->calender_date=$request->calender_date;
        $calender->image=$imageName;
        $calender->save();
        return redirect('academic/calender/add')->with('message','Academic Calender Created Successfully');
    }






    /* usefull links
    *work by :rasel
    */

    public function createUsefulLink()
    {
        $data['useful_links'] = UsefulLink::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.useful_link',$data);
    }

    public function storeUsefulLink(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required'
        ]);
       
        $useful_link = new UsefulLink;;
        $useful_link->title = $request->title;
        $useful_link->link = $request->link;
        $useful_link->save();
        return redirect('useful/link/create')->with('message', 'Links Created Successfully');
    }

    public function editUsefulLink($id)
    {
        $data['useful_link'] = UsefulLink::find($id);
        return view('admin.settings.edit_useful_link',$data);
    }


    public function updateUsefulLink(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'link' => 'required'
        ]);
        $useful_link= UsefulLink::find($id);
            $useful_link->title = $request->title;
            $useful_link->link = $request->link;
            $useful_link->save();
            return redirect('useful/link/create')->with('message', 'useful links Updated Successfully');
    }

    public function deleteUsefulLink($id)
    {
        $useful_link = UsefulLink::find($id);
        $useful_link->status = 1;
        $useful_link->save();
         return redirect('useful/link/create')->with('message', 'useful links Deleted Successfully');
      
    }


    /*passmark selection
    *work:by rasel
    */
   

    public function storePassMark(Request $request)
    {
       $this->validate($request, [
            'percentage' => 'required',
            'classNameId' => 'required',
            'semisterId' => 'required',
            'examYear' => 'required'
        ]);
       
        $pass_mark = new PassMark;;
        $pass_mark->percentage = $request->percentage;
        $pass_mark->classNameId = $request->classNameId;
        $pass_mark->semisterId = $request->semisterId;
        $pass_mark->examYear = $request->examYear;
        $pass_mark->save();
        return redirect('pass/mark/create')->with('message', 'PassMark Created Successfully');
    }

    public function editPassMark($id)
    {
        $data['classNames'] = ClassName::all();
        $data['exams'] = Exam::all();
        $data['pass_mark'] = PassMark::find($id);
        return view('admin.settings.edit_pass_mark',$data);
    }

    public function updatePassMark(Request $request,$id)
    {
       $this->validate($request, [
            'percentage' => 'required',
            'classNameId' => 'required',
            'semisterId' => 'required',
            'examYear' => 'required'
        ]);
            $pass_mark= PassMark::find($id);
            $pass_mark->percentage = $request->percentage;
            $pass_mark->classNameId = $request->classNameId;
            $pass_mark->semisterId = $request->semisterId;
            $pass_mark->examYear = $request->examYear;
            $pass_mark->save();
        return redirect('pass/mark/create')->with('message', 'PassMark update Successfully');
    }

    /*result published 11-2-2019*/

    public function storeResultPublished(Request $request)
    {
         $this->validate($request, [
            'classNameId' => 'required',
            'semisterId' => 'required',
            'examYear' => 'required',
            'date' =>'required',
        ]);
        $result_published = new ResultPublished;;
        $result_published->classNameId = implode(',', $request->classNameId);
        $result_published->semisterId = $request->semisterId;
        $result_published->examYear = $request->examYear;
        $result_published->date = $request->date;
        $result_published->save();
        return redirect('result/published')->with('message', 'Result Published Created Successfully');
     }
     public function editResultPublished($id)
     {
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
      
        $array = explode(',', $settingClass);
        
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();

        $data['exams'] = Exam::all();
        $data['result_published'] = ResultPublished::find($id);
        return view('admin.settings.edit_result_published',$data);
     }

       public function updateResultPublished(Request $request,$id)
    {
       $this->validate($request, [
           'classNameId' => 'required',
            'semisterId' => 'required',
            'examYear' => 'required',
            'date' =>'required',
        ]);
            $result_published= ResultPublished::find($id);
            $result_published->classNameId = implode(',', $request->classNameId);
            $result_published->semisterId = $request->semisterId;
            $result_published->examYear = $request->examYear;
            $result_published->date = $request->date;
            $result_published->save();
            return redirect('result/published')->with('message', 'Result Published update Successfully');
    }

         public function createResultPublished()
    {
        
        $data['exams'] = Exam::all();
        $settingClass = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        $array = explode(',', $settingClass);
        $data['classNames'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();  
        $data['result_publisheds']=DB::table('result_publisheds')
                                ->join('class_names','class_names.id','=','result_publisheds.classNameId')
                                ->join('exams','exams.id','=','result_publisheds.semisterId')->select('result_publisheds.date',
                                'result_publisheds.examYear','result_publisheds.id','result_publisheds.classNameId','class_names.classNameEnglish','exams.examName')->where('result_publisheds.status', '=', 0)->orWhere('result_publisheds.status', '=', null)->get();   
      return view('admin.settings.result_published',$data); 
    }
    public function deleteResultPublished($id){
        $result_published = ResultPublished::where('id',$id)->update(['status'=>1]);
         return redirect('result/published')->with('message', 'Delete Successfully');
     }

/*end result published */

    /*all delete option
    * work by:rasel 27-1-2019
    */


   /*show class 27-1-2019*/
    public function showClass() {
        $data['classes'] = ClassName::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.add_class', $data);
    }
    public function deleteClass($id)
        {
            $className =ClassName::where('id',$id)->update(['status'=>1]);
            return redirect('class/create')->with('message', 'Delete Class Successfully');
        }

      /* Section 27-1-2019*/  
    public function showSection() {
        $data['sections'] = Section::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.add_section', $data);
    }

    public function deleteSection($id)
    {
        $section = Section::where('id',$id)->update(['status'=>1]);
        return redirect('section/create')->with('message', 'Delete Section Successfully');
    }

    /*Group 27-1-2019*/
    public function showGroup() {
        $data['groups'] = Group::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.add_group', $data);
    }
    public function deleteGroup($id)
    {
        $group = Group::where('id',$id)->update(['status'=>1]);
        return redirect('group/create')->with('message', 'Delete Group Successfully');
    }
    /*subject 27-1-2019*/
    public function showSubject() {
        $data['subjects'] = Subject::where('status',0)->orWhere('status',NULL)->get();
        $data['groups'] = Group::all();
        $setting_class = DB::table('settings')
                        ->join('class_names', 'settings.class_name_id', '=', 'class_names.id')
                        ->first()->class_name_id;
        $array = explode(',', $setting_class);
        $data['classess'] = DB::table('class_names')
                ->whereIn('id', $array)
                ->get();
        return view('admin.settings.add_subject', $data);
    }

    public function deleteSubject($id)
    {
        $subject = Subject::where('id',$id)->update(['status'=>1]);
        return redirect('subject/add')->with('message', 'Delete subject Successfully');
    }
     /*gpa range 27-1-2019*/
      public function showGpaRange() {
        $data['gpa_ranges'] = GPARange::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.gpa_range_add', $data);
    }
    public function deleteGpa($id)
    {
        $gpa = GPARange::where('id',$id)->update(['status'=>1]);
         return redirect('gpa/mark/add')->with('message', 'Delete GPA Range Successfully');
    }

    /*exam 27-1-2019*/
      public function createExam() {
        $data['exams'] = Exam::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.add_exam', $data);
    }
    public function deleteExam($id)
    {
        $exam =Exam::where('id',$id)->update(['status'=>1]);
        return redirect('exam/create')->with('message', 'Delete Exam Successfully');
    }

    /*class Routine 27-1-2019*/
    public function routineCreate() {
        $data['routine'] = Routine::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.routine', $data);
    }
    public function deletClassRoutine($id){
        $routine = Routine::where('id',$id)->update(['status'=>1]);
         return redirect('routine/create')->with('message', 'Delete Routine Successfully');

    }

     /*Exam Routine 27-1-2019*/
    public function createExamRoutine() {
        $data['exam_routine'] = Examroutine::where('status',0)->orWhere('status',NULL)->get();
        return view('admin.settings.exam_routine', $data);
    }
    public function deleteExamRoutine($id){
        $exam = Examroutine::where('id',$id)->update(['status'=>1]);
         return redirect('exam/routine/create')->with('message', 'Delete Exam Routine Successfully');

    }

    
     /*pass mark 27-1-2019*/

       public function createPassMark()
    {
        $data['classNames'] = ClassName::all();
        $data['exams'] = Exam::all();
        $data['pass_marks']=DB::table('pass_marks')
                ->join('class_names','class_names.id','=','pass_marks.classNameId')
                ->join('exams','exams.id','=','pass_marks.semisterId')->select('pass_marks.percentage',
                 'pass_marks.examYear','pass_marks.id','class_names.classNameEnglish','exams.examName')->where('pass_marks.status', '=', 0)->orWhere('pass_marks.status', '=', null)->get();
        return view('admin.settings.pass_mark',$data);
    }

    public function deletePassMark($id)
    {
        $pass_mark = PassMark::where('id',$id)->update(['status'=>1]);
         return redirect('pass/mark/create')->with('message', ' Delete Successfully');
    }

    /*Academic Calender 27-1-2019*/

   public function addAcademic() {
        $data['academics']= AcademicCalender::where('status',0)->orWhere('status',NULL)->orderBy('id','desc')->get();
        return view('admin.settings.academic_calender',$data);
    }
    public function editCalender($id)
    {
         $data['academics'] = AcademicCalender::find($id);
         return view('admin.settings.edit_academic_calender',$data);
    }

    public function updateAcademicCalender(Request $request,$id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:jpg,pdf,png'
        ]);
        $academic_calender= AcademicCalender::find($id);
        $image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/academic_calender/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $oldImage=$academic_calender->image;
            @unlink($uploadPath.$oldImage);
            $academic_calender->title = $request->title;
            $academic_calender->calender_date = $request->calender_date;
            $academic_calender->image = $imageUrl;
            $academic_calender->save();
            return redirect('academic/calender/add')->with('message', 'Calender Updated Successfully');
        } else {
            $academic_calender->title = $request->title;
            $academic_calender->save();
            return redirect('academic/calender/add')->with('message', 'Calender Updated Successfully');
        }
    }

    public function deleteAcademicCalender($id)
    {
        $academic_calender = AcademicCalender::where('id',$id)->update(['status'=>1]);
         return redirect('academic/calender/add')->with('message', ' Delete Successfully');
    }

    
     /*system setting
    *date(2-10-2019)
    */
    public function createSystemSetting()
    {
        $data['system_setting'] = SystemSetting::first();
      return view('admin.settings.system_setting',$data);
    }

    public function storeSystemSetting(Request $request)
    {
       

       $old_system_setting =  SystemSetting::first();


       $system_setting = SystemSetting::firstOrNew(array('id' => @$old_system_setting->id));
       $system_setting->online_application  = $request->online_application;
       $system_setting->routine             = $request->routine;
       $system_setting->menu_attendance     = $request->menu_attendance;
       $system_setting->result              = $request->result;
       $system_setting->counter             = $request->counter;
       $system_setting->attendance          = $request->attendance;
       $system_setting->teacher             = $request->teacher;
       $system_setting->student             = $request->student;
       $system_setting->map                 = $request->map;
       $system_setting->ca                  = $request->ca;
       $system_setting->save();
       return redirect('system/setting/create')->with('message', ' Done Successfully');

    }

/*delete table*/
    public function createDbSetting()
    {
        return view('admin.settings.db_setting');
    }

    public function truncateDbSetting(Request $request)
    { 
        $class   = $request->class;
        $section = $request->section;
        $group   = $request->group;
        $subject = $request->subject;
        $exam    = $request->exam;
        $sliders = $request->sliders;
        $gallery = $request->gallery;
        $staff   = $request->staff;
        $students = $request->students;
        $teachers = $request->teachers;
        $managing_committee = $request->managing_committee;
        $success_students   = $request->success_students;

         if($class){
            DB::table($class)->truncate();
        }
        if($section){
            DB::table($section)->truncate();
        }
        if($group){
           DB::table($group)->truncate();
        }
        if($subject){
           DB::table($subject)->truncate();  
        }
        if($exam){
           DB::table($exam)->truncate();
        }
        if($sliders){
           DB::table($sliders)->truncate();
        }
        if($gallery){
           DB::table($gallery)->truncate();
        }
        if($staff){
           DB::table($staff)->truncate();
        }
         if($students){
           DB::table($students)->truncate();
        }
         if($teachers){
           DB::table($teachers)->truncate();
        }
         if($managing_committee){
           DB::table($managing_committee)->truncate();
        }
        if($success_students){
           DB::table($success_students)->truncate();
        }
         return redirect('db/setting/create')->with('message', ' Done Successfully');

    }
}
 