<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\exam;


class samplecontroller extends Controller
{
    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }

    public function regaction(Request $req){
        $name=$req->input('name');
        $email=$req->input('email');
        $ad=$req->input('ad');
        $cn=$req->input('cn');
        $course=$req->input('course');
        $uname=$req->input('uname');
        $pwd=$req->input('pwd');
        $data=[

            'name'=>$name,
            'email'=>$email,
            'ad'=>$ad,
            'cn'=>$cn,
            'course'=>$course,
            'uname'=>$uname,
            'pwd'=>$pwd,
            'usertype'=>'user'
        ];
        exam::insert($data);
        return view('login');
    }

    public function login(){
        return view('login');
    }
    public function loginaction(Request $req){
        $uname=$req->input('uname');
        $pwd=$req->input('pwd');
        
        $data=exam::where('uname',$uname)->where('pwd',$pwd)->first();
       // $utype=exam::select('usertype')->where('uname',$uname)->where('pwd',$pwd)->get();
        //$utype = exam::where('uname',$uname)->pluck('usertype');
       //$utype="user";
       
        if(isset($data))
        {
          
            $req->session()->put(array('sessid'=>$data->id));
             if($data->usertype=="user"){
            return redirect('/userhome');
             }
            else   if($data->usertype=="admin")
            {
                return redirect('/adminhome');}
        
        else{
            return redirect('/login')->with('error','Invalid Emal or password');
        }
     }
    }

public function userhome(){
    $id=session('sessid');
    $data['result']=exam::where('id',$id)->get();
    return view('userhome',$data);
}
public function logout(Request $req)
    {
        $req->session()->forget('sessid');
        return redirect('/login');
    }
    public function profile(){
        $id=session('sessid');
        $data['result']=exam::where('id',$id)->get();
        return view('profile',$data);
    }

    public function edit(Request $req,$id){
        $name=$req->input('name');
        $email=$req->input('email');
        $ad=$req->input('ad');
        $cn=$req->input('cn');
        $course=$req->input('course');
        $uname=$req->input('uname');
        $pwd=$req->input('pwd');
        $data=[

            'name'=>$name,
            'email'=>$email,
            'ad'=>$ad,
            'cn'=>$cn,
            'course'=>$course,
            'uname'=>$uname,
            'pwd'=>$pwd,
        ];
        exam::where('id',$id)->update($data);
        return view('profile');
    }
    public function status(){
        $id=session('sessid');
        $data['result']=exam::where('id',$id)->get();
        return view('status',$data);
    }
    public function adminhome(){
        return view('adminhome');
    }
    public function exam(){
      
        $data['result']=exam::get();
        return view('exam',$data);
    }

    public function approve(Request $req,$id){
        $data=[
            'status'=>'Approved'
        ];
exam::where('id',$id)->update($data);
return redirect('/exam');
    }
    public function reject(Request $req,$id){
        $data=[
            'status'=>'Rejected'
        ];
exam::where('id',$id)->update($data);
return redirect('/exam');
    }
}

