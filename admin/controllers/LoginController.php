<?php 
	//load file model
	include "models/LoginModel.php";
	class LoginController extends Controller{
		// kế thừa class LoginModel
		use LoginModel;
		public function Index(){
			//load view
			$this->loadView("LoginView.php");	
		}
		//Khi ấn nút submit
		public function login(){
			$this->modelLogin();
		}
		public function logout(){
			unset($_SESSION["admin_email"]);
			header("location:index.php");
		}
	}

 ?>