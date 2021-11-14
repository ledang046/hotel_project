<?php 
include "models/SearchModel.php";
	class NewsController extends Controller{
		//ke thua class SearchModel
		use NewsModel;
		public function index(){
			//so ban ghi tren mot trang
			$recordPerPage = 3;
			//tinh so trang de truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("NewsView.php",["numPage"=>$numPage,"data"=>$data]);
		}
	}
 ?>