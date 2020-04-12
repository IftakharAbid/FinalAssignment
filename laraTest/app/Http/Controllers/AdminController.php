<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $req){

		if($req->session()->has('uname')){
			return view('admin.index');
		}else{
			return redirect('/login');
        }
        
    }
}
