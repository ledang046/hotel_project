<?php 
	include "models/UsersModel.php";
	class UsersController extends Controller{
		// kế thừa class UsersModel
		use UsersModel;
		public function index(){
			//số bản ghi trên 1 trang
			$recordPerPage = 4;
			// tính số trang để truyền ra view
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			// lấy dữ liệu
			$data = $this->modelRead($recordPerPage);
			// gọi view, truyền dữ liệu ra view
			$this->loadView("UsersReadView.php",["numPage"=>$numPage,"data"=>$data]);
		}
		public function update(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			// tạo biến $action để đưa thuộc tính action của thẻ form
			$action = "index.php?controller=users&action=updatePost&id=$id";
			// lấy dữ liệu
			$record = $this->modelGetRecord($id);
			// gọi view, truyền dữ liệu ra view
			$this->loadView("UsersUpdateView.php",["record"=>$record,"action"=>$action]);
		}
	public function updatePost(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelUpdate($id);
			header("location:index.php?controller=users");
		}
	public function create(){
			// tạo biến $action để đưa thuộc tính action của thẻ form
			$action = "index.php?controller=users&action=createPost";
			// gọi view, truyền dữ liệu ra view
			$this->loadView("UsersCreateView.php",["action"=>$action]);
		}
	public function createPost(){
			$this->modelCreate();
			header("location:index.php?controller=login");
		}
	public function delete(){
			$id = isset($_GET["id"])&&$_GET["id"]>0 ? $_GET["id"] : 0;
			$this->modelDelete($id);
			header("location:index.php?controller=users");
		}
	}
 ?>