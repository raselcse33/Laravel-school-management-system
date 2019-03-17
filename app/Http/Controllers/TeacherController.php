<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherValidation;
use Session;
use App\Teacher;
use App\ClassName;
use App\ClassTeacher;

class TeacherController extends Controller {

    public function create() {
        return view('admin.teachers.teacher');
    }

    public function storeTeacher(Request $request) {

        $r = request();
        $this->validate($r, [
            'name' => 'required',
            'address' => 'required',
            'contuctNumber' => 'required|min:11|max:11',
            'emailAddress' => 'required|unique:teachers',
            'level1' => 'required',
            'level2' => 'required',
            'nidNumber' => 'required',
            'indexNumber' => 'required',
            'dateTime' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:1000'
        ]);

        if ($request->file('image')) {

            $image = $request->file('image');
            $uploadPath = 'public/images/teachers/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
        }

        Teacher::create([
            'name' => $request->name,
            'address' => $request->address,
            'contuctNumber' => $request->contuctNumber,
            'emailAddress' => $request->emailAddress,
            'level1' => $request->level1,
            'level2' => $request->level2,
            'level3' => $request->level3,
            'level4' => $request->level4,
            'nidNumber' => $request->nidNumber,
            'indexNumber' => $request->indexNumber,
            'dateTime' => $request->dateTime,
            'training' => $request->training,
            'image' => $imageUrl,
        ]);

        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }

    

    public function editTeacher($id) {
        $data['teacher'] = Teacher::find($id);
        return view('admin.teachers.edit_teacher', $data);
    }

    public function updateTeacher(Request $request, $id) {

        $r = request();
        $this->validate($r, [
            'name' => 'required',
            'address' => 'required',
            'contuctNumber' => 'required|min:11|max:11',
            'emailAddress' => 'required|unique:teachers,emailAddress,' . $id,
            'level1' => 'required',
            'level2' => 'required',
            'nidNumber' => 'required',
            'indexNumber' => 'required',
            'dateTime' => 'required',
            'image' => 'mimes:jpg,jpeg,png'
        ]);
        $teacher = Teacher::find($id);
        $image = $request->file('image');
        if ($image) {
            $uploadPath = 'public/images/teachers/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $imageun = $teacher->image;
            @unlink('public/images/teachers/' . $imageun);
            $teacher->name = $request->name;
            $teacher->dateTime = $request->dateTime;
            $teacher->contuctNumber = $request->contuctNumber;
            $teacher->emailAddress = $request->emailAddress;
            $teacher->address = $request->address;
            $teacher->nidNumber = $request->nidNumber;
            $teacher->indexNumber = $request->indexNumber;
            $teacher->level1 = $request->level1;
            $teacher->level2 = $request->level2;
            $teacher->level3 = $request->level3;
            $teacher->level4 = $request->level4;
            $teacher->image = $imageUrl;
            $teacher->training = $request->training;
            $teacher->save();
            Session::flash('message', 'Insert Info Successfully');
            return redirect('teacher/manage');
        } else {
            $teacher->name = $request->name;
            $teacher->dateTime = $request->dateTime;
            $teacher->contuctNumber = $request->contuctNumber;
            $teacher->emailAddress = $request->emailAddress;
            $teacher->address = $request->address;
            $teacher->nidNumber = $request->nidNumber;
            $teacher->indexNumber = $request->indexNumber;
            $teacher->level1 = $request->level1;
            $teacher->level2 = $request->level2;
            $teacher->level3 = $request->level3;
            $teacher->level4 = $request->level4;
            $teacher->training = $request->training;
            $teacher->save();
            Session::flash('message', 'Update Info Successfully');
            return redirect('teacher/manage');
        }
    }

    /* select Class teacher
    work by:rasel
    */

    public function createClassTeacher()
    {
        $data['classNames'] = ClassName::all();
        $data['teachers'] = Teacher::all();
        return view ('admin.teachers.class_teacher',$data);
    }

    public function storeClassTeacher(Request $request)
    {

       $class_teacher = new ClassTeacher;
       $count = Teacher::count();
        for($i=0;$i<$count;$i++)
        {
            $class_teacher->insert([
                    'teacher_table_id' => $request->teacher_table_id[$i],
                    'indexNumber' => $request->indexNumber[$i],
                    'name' => $request->name[$i],
                    'classNameId' => $request->classNameId[$i],
                    'cheek' => $request->cheek[$i]
            ]);
        } 
        return redirect('class/teacher/create')->with('message', 'Class teacher selected Successfully'); 
    }








    /*
    *delete teacher option-27-1-2019
    */

    public function showTeacher() {
        $data['teachers'] = Teacher::where('status',0)->orWhere('status',NULL)->paginate(10);
        return view('admin.teachers.show_teacher', $data);
    }

    public function deleteTeacher($id)
    {
        $teacher = Teacher::where('id',$id)->update(['status'=>1]);
         return redirect('teacher/manage')->with('message', 'Delete Successfully'); 
    }
}

