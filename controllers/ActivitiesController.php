<?php 
include "models/ActivitiesModel.php";
	class ActivitiesController extends Controller{
		//ke thua class SearchModel
		use ActivitiesModel;
		public function index(){
			//so ban ghi tren mot trang
			$recordPerPage = 3;
			//tinh so trang de truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ActivitiesView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		public function detail() {
    		 $id = isset($_GET["id"]) ? $_GET["id"] : 0;
      		 $record = $this->modelGetRecord($id);
      		 $this->loadView("ActivitiesDetail.php",["record"=>$record,"id"=>$id]);
    	 }
	}
 ?>