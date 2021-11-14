<?php 
	class HomeController extends Controller{
		//hàm tạo 
		public function __construct(){
			//xác thực đăng nhập
			$this->authentication();
		}
		public function index(){
			//load view
			$this->loadView("HomeView.php");
		}
	}
 ?>