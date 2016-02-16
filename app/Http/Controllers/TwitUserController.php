<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Twitter;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TwitUserController extends Controller{

	public function login(){

		 return view('login');
	}

	 public function verify(){

        $sign_in_twitter = true;
        $force_login = true;

       
        Twitter::reconfig(['token' => '', 'secret' => '']);
        $token = Twitter::getRequestToken(route('twitter.callback'));

        if (isset($token['oauth_token_secret']))
        {
            $url = Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);

            Session::put('oauth_state', 'start');
            Session::put('oauth_request_token', $token['oauth_token']);
            Session::put('oauth_request_token_secret', $token['oauth_token_secret']);

            return Redirect::to($url);
        }

        return Redirect::route('twitter.error');
    }


    public function callback() {
        
        if (Session::has('oauth_request_token'))
        {
            $request_token = [
                'token'  => Session::get('oauth_request_token'),
                'secret' => Session::get('oauth_request_token_secret'),
            ];

            Twitter::reconfig($request_token);

            $oauth_verifier = false;

            if (Input::has('oauth_verifier'))
            {
                $oauth_verifier = Input::get('oauth_verifier');
            }

            $token = Twitter::getAccessToken($oauth_verifier);

            if (!isset($token['oauth_token_secret']))
            {
                return Redirect::route('twitter.login')->with('flash_message', 'We could not log you in on Twitter.');
            }

            $credentials = Twitter::getCredentials();
            
            if (is_object($credentials) && !isset($credentials->error))
            {

                $creds = (array) $credentials;
                $pic  = $creds["profile_image_url"];


                Session::put('profile_pic', $pic);
                Session::put('access_token', $token);

                return Redirect::to('/home')->with('flash_message', 'Congrats! You\'ve successfully signed in!');
            }

            return Redirect::route('user.login')->with('flash_message', 'Crab! Something went wrong while signing you up!');
        }
   
    }

    public function logout(){
        
        Session::forget('profile_pic');
        Session::forget('access_token');
        return Redirect::route('app.landing')->with('flash_message', 'You have sucessfully logged out!');

    }






}
