<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\User;
class UserController extends Controller
{
    public function index($id) {
        $data['user']=User::find($id);
        return view('admin.users.profile',$data);
    }
    public function updateUser(Request $request) {
//        dd($request);
         $this->validate($request, [
                    'name' => 'required'|'string'|'max:255',
                    'email' => 'required'| 'string'| 'email'| 'max:255'| 'unique:users',
                    'password' => 'required'| 'string'| 'min:6'| 'confirmed',
        ]);
         $user = User::find($request->userId);
         $user->name=$request->name;
         $user->email=$request->email;
         $user->password=Hash::make($request['password']);
         $user->save();
         return Redirect::back()->with('message','Profile Update Successfully');
    }
}
