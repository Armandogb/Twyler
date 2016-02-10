<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TwitUserController extends Controller
{
	public function verify(Request $request){
		/*return redirect('/');*/
		echo $request->input('email');
		echo $request->input('password');

	}
}
