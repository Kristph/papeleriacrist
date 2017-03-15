<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller{
	public function login(){
		return view("site.login");
	}
	public function verify(){
		//echo var_dump($_POST);
		return view("site.index");
	}
	public function index(){
		return view("site.index");	
	}

	public function users(){
		return view("site.users");	
	}

	public function storage(){
		return view("site.storage");	
	}
	public function sells(){
		return view("site.sells");	
	}
	public function buys(){
		return view("site.buys");	
	}

	public function userReg(){
		return view("site.usersReg");	
	}

	public function storageReg(){
		return view("site.storageReg");	
	}
}
