<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ManagingCommittee;
use Session;

class ManagingCommitteeController extends Controller
{
	//managing committee create
    public function create()
    {
      return view('admin.managing_committee.add_managing_committee');
    }

    public function store_managing_committee(Request $request)
    {
    	 $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'address' => 'required',
            'phone'=>'required|min:11|max:11',
            'image' => 'mimes:jpg,png,jpeg|max:1000',
        ]);

    	$image = $request->file('image');
        $uploadPath = 'public/images/managing_committee/';
        $imageEx = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $imageEx;
        $imageUrl = $imageName;
        $image->move($uploadPath, $imageName);
        $managing_committee = new ManagingCommittee;
        $managing_committee->name = $request->name;
        $managing_committee->designation = $request->designation;
        $managing_committee->start_time = $request->start_time;
        $managing_committee->end_time = $request->end_time;
        $managing_committee->address = $request->address;
        $managing_committee->phone = $request->phone;
        $managing_committee->image = $imageUrl;
        $managing_committee->save();
        Session::flash('message', 'Insert Successfully');
        return redirect()->back();
    }



    /*change 27-1-2019*/

    public function listManagingCommittee () {
        $data['managing_committee']= ManagingCommittee::where('status',0)->get();
        return view('admin.managing_committee.list_managing_committee',$data);
    }
    public function editManagingCommittee($id) {
//        dd($id);
        $data['managing_committee']= ManagingCommittee::find($id);
        return view('admin.managing_committee.edit_managing_committee',$data);
    }
    public function updateManagingCommittee(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'address' => 'required',
            'phone'=>'required|min:11|max:11',
            'image' => 'mimes:jpg,png,jpeg|max:1000',
        ]);
        $managing_committee= ManagingCommittee::find($request->committeeId);
    	$image = $request->file('image');
        if($image){
            $uploadPath = 'public/images/managing_committee/';
            $imageEx = $image->getClientOriginalExtension();
            $imageName = time() . '.' . $imageEx;
            $imageUrl = $imageName;
            $image->move($uploadPath, $imageName);
            $managing_committee->name = $request->name;
            $managing_committee->designation = $request->designation;
            $managing_committee->start_time = $request->start_time;
            $managing_committee->end_time = $request->end_time;
            $managing_committee->address = $request->address;
            $managing_committee->phone = $request->phone;
            $managing_committee->image = $imageUrl;
            $managing_committee->save();
            return redirect('managing/committee/list')->with('message','Managing Committee Update Successfully');
        }else{
            $managing_committee->name = $request->name;
            $managing_committee->designation = $request->designation;
            $managing_committee->start_time = $request->start_time;
            $managing_committee->end_time = $request->end_time;
            $managing_committee->address = $request->address;
            $managing_committee->phone = $request->phone;
            $managing_committee->save();
            return redirect('managing/committee/list')->with('message','Managing Committee Update Successfully');
        }
        
    }

    /*27-1-2019*/
    public function deleteManagingCommittee($id) {
        $managing_committee= ManagingCommittee::where('id',$id)->update(['status'=>1]);
        return redirect('managing/committee/list')->with('message','Managing Committee Deleted Successfully');
    }
}