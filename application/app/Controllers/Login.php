<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		echo"inside_Login ";
		$this->hola(" dashboard-slug",123);
	//return view('welcome_message');
	}
public function hola($slug=null, $id=null){
	echo $slug."<br>";
	echo $id."<br>";
//	echo"<h1>aaaaahhhhhhhh!!!!!!!!!<h1/>";
  }


	//--------------------------------------------------------------------

}
