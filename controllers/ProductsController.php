<?php 
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//ke thua class ProductsModel
		use ProductsModel;
		public function category(){
			//so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang de truyen ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("RoomsView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		public function category1(){
			//so ban ghi tren mot trang
			$recordPerPage = 10;
			//tinh so trang de truyen ra view
			$numPage = ceil($this->modelTotalRecordAll()/$recordPerPage);
			//lay du lieu
			$data = $this->modelReadAll($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("AllRoomsView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		//chi tiet san pham
		public function detail() {
    		 $id = isset($_GET["id"]) ? $_GET["id"] : 0;
      		 $record = $this->modelGetRecord($id);
      		 $this->loadView("ProductsDetailView.php",["record"=>$record,"id"=>$id]);
    	 }
	}
 ?>