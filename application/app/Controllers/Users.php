<?php namespace App\Controllers;

class Users extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function test (){
		echo "estamos probando"; 
	}

	//--------------------------------------------------------------------

}
