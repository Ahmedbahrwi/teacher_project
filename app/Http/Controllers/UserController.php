<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function get_user()
    {
        return view('add_user');
    }
    public function add_user(Request $request)
    {  
        //MAKE validate for user_email and user_password & user_nam
        $request->validate([
            'student_name'=>'required|string|max:100',
            'student_phone'=>'required|string|max:100',
            'student_par_phone'=>'required|string|max:50|min:5',
            'student_gender'=>'required|string|max:100',
            'student_year'=>'required',
            
        ]);
        //create in table users username and password and usermobile and email in database that take from user
        Student::create([
            'student_name'=>$request->student_name,
            'student_phone'=>$request->student_phone,
            'student_par_phone'=>$request->student_par_phone,
            'student_gender'=>$request->student_gender,
            'student_year'=>$request->student_year,

        ]);
       
        //$data = $request->all();
        //$check = $this->create($data);
        return redirect("dashboard")->withSuccess('Great! You have Successfully added');
    }
    public function user_edit($user_uid)
    {
        //make to find id
        $user=User::findOrFail($user_uid);
        return view('edit_comment',compact('user'));
    }
    public function user_update(Request $re,$user_uid)
    {
        //make to find id and updata on data in database
        User::findOrFail($user_uid)->update([
            'user_name'=>$re->user_name,
            'user_email '=>$re->user_email,
            'user_password'=>$re->user_password, 
            
        ]);
        return view('welcome');

    }
    public function user_delete($user_uid)
    {
        User::findOrFail($user_uid)->delete();
        return view('welcome');
    }
    public function user_index()
    {
        $users=User::get();
        return view('user_index',compact('users'));
    }
    //function to show user by id
    public function user_show($user_uid)
    {
        $user=User::findOrFail($user_uid);
        return view('user_show',compact('user'));

    }
    //
}
