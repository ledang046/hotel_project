<?php 
	//load model
	include "models/HomeModel.php";
	class HomeController extends Controller{
		//ke thua class model
		use HomeModel;
		public function index(){
			// goi view
			$this->loadView("HomeView.php");
		}
	}
 ?>