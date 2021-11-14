<?php include "models/AccountModel.php"; 
	class AccountController extends Controller{
		use AccountModel;
		// đăng ký
		public function register(){
			$this->loadView("AccountRegisterView.php");
		}
		public function registerPost(){
			$this->modelRegister();
		}
		public function login(){
			$this->loadView("AccountLoginView.php");
		}
		public function loginPost(){
			$this->modelLogin();
		}
		public function logout(){
			$this->modelLogout();
		}
	}
?>