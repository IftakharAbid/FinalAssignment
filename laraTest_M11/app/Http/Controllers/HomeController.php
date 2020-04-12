<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    
    
}
