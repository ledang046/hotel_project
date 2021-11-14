<?php 
	trait UsersModel{
		public function modelRead($recordPerPage){
			$totalRecord = $this->modelTotalRecord();
			$numpage = ceil($totalRecord/$recordPerPage);
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1 : 0;
			$from = $page * $recordPerPage;
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users order by id asc limit $from,$recordPerPage");
			return $query->fetchAll();
		}
		public function modelTotalRecord(){
			$conn = Connection::getInstance();
			$query = $conn->query("select id from users");
			return $query->rowCount();
		}
		public function modelGetRecord($id){
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from users where id=:var_id");
			$query->execute(["var_id"=>$id]);
			return $query->fetch();
		}
		public function modelUpdate($id){
			$name = $_POST["name"];
			// $email = $_POST["email"];
			$password = $_POST["password"];
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("update users set name=:var_name where id=:var_id");
			$query->execute(["var_id"=>$id,"var_name"=>$name]);
			//  nếu password không rỗng thì update password
			if($password != ""){
				//mã hóa password
				$password = md5($password);
				$query = $conn->prepare("update users set password=:var_password where id=:var_id");
				$query->execute(["var_id"=>$id,"var_password"=>$password]);
			}
		}
		public function modelCreate(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$password = $_POST["password"];
			//mã hóa password
			$password = md5($password);
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("insert into users set name=:var_name,email=:var_email,password=:var_password");
			$query->execute(["var_password"=>$password,"var_name"=>$name,"var_email"=>$email]);
			//  nếu password không rỗng thì update password
		}
		public function modelDelete($id){
			// lấy biến kết nối
			$conn = Connection::getInstance();
			//update cột name
			$query = $conn->prepare("delete from users where id=:var_id");
			$query->execute(["var_id"=>$id]);
		}
	}
 ?>