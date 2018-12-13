<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class HomeController extends Controller
{
    public function index(){
    	return view('backend.index');
    }
    public function login(){
    	return view('backend.login');
    }
    public function postlogin(Request $req){
    	$email=$req->email;
    	$password=$req->password;
    	$obj=User::where('email','=',$email)
    			 ->where('password','=',$password)
    			 ->first();
    	if($obj){
    		Session::put('firstName',$obj->firstName);//this pass the variable
    		return redirect('index');
    	}
    	else 
    		return "wrong";		 
    }
    public function logout(Request $req)
    {
    	$req->session()->flush();
    	return redirect('/');
    	
    }
    public function register(){
    	return view('backend.register');
    }
    public function store(Request $req){
    	$obj=new User();
    	$obj->firstName=$req->firstName;
    	$obj->lastName=$req->lastName;
    	$obj->email=$req->email;
    	$obj->password=$req->password;

    	if($obj->save()){
    		return view('backend.login');
    	}
    	else
    		return view('backend.index');

    }
}
