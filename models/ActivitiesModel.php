<?php 
	trait ActivitiesModel{
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
			$query = $conn->query("select * from news order by id asc limit $from,$recordPerPage");
			//trả về tất cả bản ghi 
			return $query->fetchAll();
		}
		//tính tổng số bản ghi 
		public function modelTotalRecord(){
			//lấy biến kết nối 
			$conn = Connection::getInstance();
			$query = $conn->query("select id from news");
			return $query->rowCount();
		}
		// lấy một bản ghi 
		public function modelGetRecord($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from news where id=:var_id");
			$query->execute(["var_id"=>$id]);
			// trả về một bản ghi
			return $query->fetch();
		}
	}
 ?>