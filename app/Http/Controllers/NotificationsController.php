<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class NotificationsController extends Controller
{

	public function __construct(){

		$this->middleware('auth',['except'=>[]]);
	}


	public function index(){

		$notifications = Auth::user()->notifications()->paginate(10);
		return view('notifications.index' , compact('notifications'));
	}






    //
}
