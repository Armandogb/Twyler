<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Twitter;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class MainPageController extends Controller{

	public function welcome(){

		if(Session::has('access_token')){
			return Redirect::route('app.home');
		}

		return view('welcome');
	}


    public function home(){

    	$token = Session::get('access_token');
    	$user_name = $token['screen_name'];
    	$user_id = $token["user_id"];

    	$t_json = Twitter::getHomeTimeline(['count' => 30, 'format' => 'json']);
    	$decode = json_decode($t_json);

    	return view('home',['user_name' => $user_name,'user_id' => $user_id,'feed' => $decode]);
    }

    public function twyl(){


    }

}
