<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    public function index(Request $req){

		if($req->session()->has('uname')){
			return view('admin.index');
		}else{
			return redirect('/login');
        }
        
	}
	
	public function viewManager()
	{
		
		$managers=User::all() ;
        return view('admin.viewManager',compact('managers'));
	}

	public function deleteManager($id)
    {
        User::find($id)->delete();
        return redirect(route('viewManager'))->with('successMsg','Manager deleted Successfully');
    }
}
 