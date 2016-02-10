<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwitUserController extends Controller{

	public function login(){
		 return view('login');
	}

	public function verify(Request $request){


	}
}
