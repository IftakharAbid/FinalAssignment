<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\busCounter;


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
	
	public function viewStaff()
	{
		
		$staffs=User::all() ;
        return view('admin.viewStaff',compact('staffs'));
	}

	public function deletestaff($id)
    {
        User::find($id)->delete();
        return redirect(route('viewStaff'))->with('successMsg','Staff deleted Successfully');
	}

	public function editStaff($id)
    {
        $staff=User::find($id);
        return view('admin.editStaff',compact('staff'));
	}
	
	public function updateStaff(Request $request,$id)
    {
        $this->validate($request,[
            'uname'=>'required',
            'password'=>'required',
            'type'=>'required',
            'name'=>'required'
        ]);

        $staff=User::find($id);
        $staff->username=$request->uname;
        $staff->password=$request->password;
        $staff->type=$request->type;
        $staff->name=$request->name;
        $staff->save();
        return redirect(route('viewStaff'))->with('successMsg','staff updated Successfully');
    }
	




	
	public function viewCounter()
	{
		
		$counters=busCounter::all() ;
        return view('admin.viewCounter',compact('counters'));
	}

	public function deletecounter($id)
    {
        busCounter::find($id)->delete();
        return redirect(route('viewCounter'))->with('successMsg','Counter deleted Successfully');
	}

	public function editcounter($id)
    {
        $counter=busCounter::find($id);
        return view('admin.editcounter',compact('counter'));
	}
	
	public function updatecounter(Request $request,$id)
    {
        $this->validate($request,[
            'operator'=>'required',
            'manager'=>'required',
            'location'=>'required',
            'name'=>'required'
        ]);

        $counter=busCounter::find($id);
        $counter->operator=$request->operator;
        $counter->manager=$request->manager;
        $counter->name=$request->name;
        $counter->location=$request->location;
        $counter->save();
        return redirect(route('viewCounter'))->with('successMsg','counter updated Successfully');
    }
	

}
 