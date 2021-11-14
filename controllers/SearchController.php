<?php 
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//ke thua class SearchModel
		use SearchModel;
		public function index(){
			//so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang de truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("SearchView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		public function ajax(){
			//laasy du lieju
			$data = $this->modelAjax();
			echo $data;
		}
	}
 ?>