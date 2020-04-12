<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\busCounter;
use App\buses;

use App\Http\Requests\HomeRequest;
use Validator;
class HomeController extends Controller
{
    
    
    public function Userindex(Request $req){

		if($req->session()->has('uname')){
            return view('home.Userindex');
            
		}else{
			return redirect('/login');
        }
        
    }


    public function viewBus()
	{
		
		$buses=buses::all() ;
        return view('home.viewBus',compact('buses'));
	}

	public function deletebus($id)
    {
        buses::find($id)->delete();
        return redirect(route('home.viewBus'))->with('successMsg','bus deleted Successfully');
	}

	public function editbus($id)
    {
        $bus=buses::find($id);
        return view('home.editbus',compact('bus'));
	}
	
	public function updatebus(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>'required',
            'company'=>'required',
            'location'=>'required',
            'seat_row'=>'required',
            'seat_column'=>'required'
        ]);

        $bus=buses::find($id);
        $bus->name=$request->name;
        $bus->company=$request->company;
        $bus->location=$request->location;
        $bus->seat_row=$request->seat_row;
        $bus->seat_column=$request->seat_column;
        $bus->save();
        return redirect(route('home.viewBus'))->with('successMsg','bus updated Successfully');
    }
	

    
    
}
