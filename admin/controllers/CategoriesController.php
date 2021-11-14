<?php 
	include "models/CategoriesModel.php";
	class CategoriesController extends Controller{
		// kế thừa class CategoriesModel
		use CategoriesModel;
		public function index(){
			//số bản ghi trên 1 trang
			$recordPerPage = 20;
			// tính số trang để truyền ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			// lấy dữ liệu
			$data = $this->modelRead($recordPerPage);
			// gọi view, truyền dữ liệu ra view
			$this->loadView("CategoriesReadView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		public function update(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			// tạo biến $action để đưa thuộc tính action của thẻ form
			$action = "index.php?controller=categories&action=updatePost&id=$id";
			// lấy dữ liệu
			$record = $this->modelGetRecord($id);
			// gọi view, truyền dữ liệu ra view
			$this->loadView("CategoriesCreateUpdateView.php",["record"=>$record,"action"=>$action]);
		}
	public function updatePost(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelUpdate($id);
			header("location:index.php?controller=categories");
		}
	public function create(){
			// tạo biến $action để đưa thuộc tính action của thẻ form
			$action = "index.php?controller=categories&action=createPost";
			// gọi view, truyền dữ liệu ra view
			$this->loadView("CategoriesCreateUpdateView.php",["action"=>$action]);
		}
	public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=categories");
		}
	public function delete(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelDelete($id);
			header("location:index.php?controller=categories");
		}
	}
 ?>