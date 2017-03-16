<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Classes\CustomCrypt;
use App\Classes\CustomClass;
use App\User;
use Auth;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use App\Http\Requests\RegisterRequest;

class StarterController extends Controller
{

	/* ------------ GET Request Functions -------------------------------------------*/

    public function registerGET($code){
    	
    	if (CustomCrypt::decrypt($code) == 'stambic') {
    		return view('app.register');
    	}

    	return view('app.login');
    	
    }

    /* ------------ POST Request Functions -------------------------------------------*/

    public function registerPOST(RegisterRequest $request){
    	
    	User::create([
    		'username' => $request->username,
    		'password' => $request->password
    		]);
    	Session::flash('msg','Account Successfully Created. Login to Start Session');
    	return redirect('/login');
    }

    public function loginPOST(LoginRequest $r){
    	$remember = false;
    	if($r->has('remember')){
    		$remember = true;
    	}

    	if (Auth::attempt(['username' => $r->username, 'password'=> $r->password], $remember)) {
    		
    	}

    	return redirect()->back()->withErrors('Login Failed');

    }
}
