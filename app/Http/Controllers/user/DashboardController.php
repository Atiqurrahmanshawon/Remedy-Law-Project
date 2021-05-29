<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\user\UserForm;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('user.dashboard');
    }

    public function appointment(){
        $user=UserForm::get();
        //dd($user);
        return view('user.appointmentTable',compact('user'));
    }

    public function lawyer(){
        return view('user.lawyerTable');
    }
    public function save(Request $request){

        //dd($request);
//        dd($request->all());

        $user_form=new UserForm();
        $user_form->name=$request->name;
        $user_form->email=$request->email;
        $user_form->phone=$request->phone;
        $user_form->date=$request->date;
        $user_form->time=$request->time;
        $user_form->description=$request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = 'assets/image';
            $file_name = 'image'.$request->phone.'.'.$file->getClientOriginalExtension();
            $file ->move($path,$file_name);
            $user_form->image = $path.'/'.$file_name;
        }


        $user_form->save();

        return redirect()->back();

    }
}
