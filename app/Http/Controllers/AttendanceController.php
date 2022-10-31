<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{
    public function get_attend()
    {
        return view('attend');
    }
    public function add_attend(Request $request)
    {  
        //MAKE validate for user_email and user_password & user_nam
        $request->validate([
            'attendence_student_uid'=>'required',
            'attendence_course_name'=>'required|string|max:100',
            'attendance_time'=>'required',
            'attendance_date'=>'required',
            
            
        ]);
        //create in table users username and password and usermobile and email in database that take from user
        Attendance::create([
            'attendence_student_uid'=>$request->attendence_student_uid,
            'attendence_course_name'=>$request->attendence_course_name,
            'attendance_time'=>$request->attendance_time,
            'attendance_date'=>$request->attendance_date,

        ]);
       
        //$data = $request->all();
        //$check = $this->create($data);
        return redirect("attend");
    } 
    
    public function index(Request $re)
    {
        //if(count==0)
        $attend=Attendance::max('attendance_uid');
       //count=1
        $ars=DB::table('attendances')
        ->select('attendence_student_uid')->where('created_at','>=',$re->created_at)->get();
        //dd($ars);
        return view('attendace_show',compact('ars'));

        // int[5] att;
        /*
        
        */
        
        //Attendance::get();
        //return view('attendace_show',compact('attend'));
    }
    //function to show attendance by id
    public function show($blog_uid)
    {
        //echo'hii';exit();
        $attend=Attendance::findOrFail($blog_uid);
        return view('show',compact('blog'));

    }
    //function to show parent form
    public function par()
    {
        return view('parant');
    }
    //function enable parent to show to if student attend or not
    public function par_check(Request $req){
        $ars=DB::table('attendances')
        ->select('created_at')->where('attendence_student_uid','=',$req->attendence_student_uid)->get();
        return view('par_show',compact('ars'));

    }

    public function g_bref(){
        return view('bref_g');
    }
    //function to show all attendance in course
    public function bref(Request $req){
        $ars=DB::table('attendances')
        ->select('attendence_student_uid')->where('attendance_date','=',$req->attendance_date)->where('attendance_time','=',$req->attendance_time)->get();
        return view('bref',compact('ars'));

    }
    //
}
