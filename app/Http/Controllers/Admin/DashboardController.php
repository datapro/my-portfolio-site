<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function dashboard(){
        return view('admin.admin');
    }
    public function register(){
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registerededit(Request $request,$id){
        $users=User::findorFail($id);
        return view('admin.register-edit',(['users'=>$users]));

    }
    public function registeredeupdate(Request $request, $id){
        $users = User::find($id);
        $users ->name=$request->input('name');
        $users ->usertype=$request->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status','Updated successfully');
    }
    public function registerdelete($id){
            $users=User::findorFail($id);
            $users->delete();
            return redirect('/role-register')->with('status','deleted successfully');

    }
    public function create_blog(){
        return view('/admin.createblog');
    }
}
