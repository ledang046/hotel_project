<?php 
	trait CategoriesModel{
		// lấy các bản ghi có phân trang
		// $recordPerPage -> số bản ghi trên một trang
		public function modelRead($recordPerPage){
			// lấy tổng các bản ghi 
			$totalRecord = $this->modelTotalRecord();
			// tính số trang
			// hàm ceil là hàm lấy trần. VD: ceil(2.2) = 3
			$numPage = ceil($totalRecord/$recordPerPage);
			// lấy biến page truyền từ url
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1 : 0;
			// lấy từ bản ghi nào
			$from = $page * $recordPerPage;
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id asc limit $from,$recordPerPage");
			//trả về tất cả bản ghi 
			return $query->fetchAll();
		}
		//tính tổng số bản ghi 
		public function modelTotalRecord(){
			//lấy biến kết nối 
			$conn = Connection::getInstance();
			$query = $conn->query("select id from categories where parent_id = 0");
			// trả về tổng số bản ghi đếm được
			return $query->rowCount();
		}
		// lấy một bản ghi 
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from categories where id=:var_id");
			$query->execute(["var_id"=>$id]);
			// trả về một bản ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("update categories set name=:var_name,parent_id=:var_parent_id where id=:var_id");
			$query->execute(["var_id"=>$id,"var_name"=>$name,"var_parent_id"=>$parent_id]);

		}
		public function modelCreate(){
			$name = $_POST["name"];
			$parent_id = $_POST["parent_id"];
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("insert into categories set name=:var_name,parent_id=:var_parent_id");
			$query->execute(["var_name"=>$name,"var_parent_id"=>$parent_id]);
			//  nếu password không rỗng thì update password
		}
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("delete from categories where id=:var_id or parent_id = $id");
			$query->execute(["var_id"=>$id]); 
		}
		public function modelCategoriesSub($category_id)
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id");
			return $query->fetchAll();

		}
		public function modelCategories()
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0");
			return $query->fetchAll();

		}
	}
 ?>