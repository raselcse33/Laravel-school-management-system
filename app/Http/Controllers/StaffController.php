<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller {

    public function index() {
        return view('admin.staffs.add_staff');
    }

    public function createStaff(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'nid_number' => 'required|unique:staff',
            'phone_number' => 'required|unique:staff|max:11|min:11',
            'email'=>'unique:staff',
            'marital_status' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'designation' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:500',
            'cv' => 'required|mimes:pdf|max:500',
            'document'=>'required|mimes:pdf|max:500',
        ]);
        

        $image = $request->file('image');
        $uploadPath = 'public/images/staffs/image/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);

        $cv = $request->file('cv');
        $uploadPath = 'public/images/staffs/cv/';
        $cvEx = $cv->getClientOriginalExtension();
        $cvName = time() . '.' . $cvEx;
        $cvUrl = $cvName;
        $cv->move($uploadPath, $cvName);
        
        $document = $request->file('document');
        $uploadPath = 'public/images/staffs/document/';
        $documentEx = $document->getClientOriginalExtension();
        $documentName = time() . '.' . $documentEx;
        $documentUrl = $documentName;
        $document->move($uploadPath, $documentName);
        
        $staff = new Staff;
        $staff->name = $request->name;
        $staff->date = $request->date;
        $staff->father_name = $request->father_name;
        $staff->mother_name = $request->mother_name;
        $staff->present_address = $request->present_address;
        $staff->permanent_address = $request->permanent_address;
        $staff->nid_number = $request->nid_number;
        $staff->phone_number = $request->phone_number;
        $staff->email = $request->email;
        $staff->marital_status = $request->marital_status;
        $staff->gender = $request->gender;
        $staff->education = $request->education;
        $staff->job_skill = $request->job_skill;
        $staff->experience = $request->experience;
        $staff->previous_institution = $request->previous_institution;
        $staff->designation = $request->designation;
        $staff->image = $imageUrl;
        $staff->cv = $cvUrl;
        $staff->document = $documentUrl;
        $staff->save();
        return redirect('staff/add')->with('success', 'Staff created Successfully');
    }

    public function listStaff()
    {
        $data['staffs'] = Staff::paginate(10);
        return view('admin.staffs.staff_list',$data);
    }

    public function viewStaff($id)
    {
        $data['staff'] = Staff::find($id);
        return view('admin.staffs.view_staff',$data);
    }

    public function editStaff($id)
    {
        $data['staff'] = Staff::find($id);
        return view('admin.staffs.edit_staff',$data);
    }

    public function updateStaff(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'date' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'nid_number' => 'required|unique:staff,nid_number,'.$id,
            'phone_number' => 'required|max:11|min:11|unique:staff,phone_number,'.$id,
            'email'=>'unique:staff,email,'.$id,
            'marital_status' => 'required',
            'gender' => 'required',
            'education' => 'required',
            'designation' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:500',
            'cv' => 'mimes:pdf|max:500',
            'document'=>'mimes:pdf|max:500',
        ]);

        if (!$request->file('image') && !$request->file('cv') && !$request->file('document') ) {
             $staff = Staff::find($id);
            $staff->name = $request->name;
            $staff->date = $request->date;
            $staff->father_name = $request->father_name;
            $staff->mother_name = $request->mother_name;
            $staff->present_address = $request->present_address;
            $staff->permanent_address = $request->permanent_address;
            $staff->nid_number = $request->nid_number;
            $staff->phone_number = $request->phone_number;
            $staff->email = $request->email;
            $staff->marital_status = $request->marital_status;
            $staff->gender = $request->gender;
            $staff->education = $request->education;
            $staff->job_skill = $request->job_skill;
            $staff->experience = $request->experience;
            $staff->previous_institution = $request->previous_institution;
            $staff->designation = $request->designation;
            $staff->save();
            return redirect('staff/add')->with('success', 'Staff Update Successfully');
        }else{
            $staff = Staff::find($id);

            $image = $request->file('image');
            if($image){
            $uploadPath = 'public/images/staffs/image/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $old_image = $staff->image;
            @unlink('public/images/staffs/image/' . $old_image);
            $staff->image = @$imageUrl;
        }

            $cv = $request->file('cv');
            if($cv){
            $uploadPath = 'public/images/staffs/cv/';
            $cvEx = $cv->getClientOriginalExtension();
            $cvName = time() . '.' . $cvEx;
            $cvUrl = $cvName;
            $cv->move($uploadPath, $cvName);
            $old_cv = $staff->cv;
            @unlink('public/images/staffs/cv/' . $old_cv);
             $staff->cv = @$cvUrl;
         }
            
            $document = $request->file('document');
            if($document){
            $uploadPath = 'public/images/staffs/document/';
            $documentEx = $document->getClientOriginalExtension();
            $documentName = time() . '.' . $documentEx;
            $documentUrl = $documentName;
            $document->move($uploadPath, $documentName);
            $old_document = $staff->document;
            @unlink('public/images/staffs/document/' . $old_document);
             $staff->document = @$documentUrl;
        }

            $staff->name = $request->name;
            $staff->date = $request->date;
            $staff->father_name = $request->father_name;
            $staff->mother_name = $request->mother_name;
            $staff->present_address = $request->present_address;
            $staff->permanent_address = $request->permanent_address;
            $staff->nid_number = $request->nid_number;
            $staff->phone_number = $request->phone_number;
            $staff->email = $request->email;
            $staff->marital_status = $request->marital_status;
            $staff->gender = $request->gender;
            $staff->education = $request->education;
            $staff->job_skill = $request->job_skill;
            $staff->experience = $request->experience;
            $staff->previous_institution = $request->previous_institution;
            $staff->designation = $request->designation;
            $staff->save();
            return redirect('staff/add')->with('success', 'Staff updated Successfully');

        }
        

    }

}
