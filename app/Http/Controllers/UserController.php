<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    //
    public function login_register(Request $request){
        $newUser = new User();
        $newUser->name = $request->username;
        $newUser->email = $request->email;
        if(isset($request->password) && isset($request->cnfpassowrd)){
            if($request->password == $request->cnfpassowrd){
                $newUser->password = Hash::make($request->password);
            }else {
                return "Please conformpwd Wrong";
            }
        }else{
            return "Please Enter Passowrd";
        }
        $newUser->save();
        return redirect('/admin');
    }

    public function admindata(){
        $users = User::Select('id','name','email')->get();
        foreach ($users as $key => $value) {
            $users[$key]['slno'] = $key + 1;
        }
        return view('admin.dashboard')->with('users',$users);
    }

}
