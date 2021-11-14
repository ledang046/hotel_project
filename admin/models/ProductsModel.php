<?php 
	trait ProductsModel{
		//lay cac ban ghi co phan trang
		//$recordPerPage -> so ban ghi tren mot trang
		public function modelRead($recordPerPage){
			//lay tong cac ban ghi
			$totalRecord = $this->modelTotalRecord();
			//tinh so trang
			//ham ceil la ham lay trần. VD: ceil(2.2) = 3
			$numPage = ceil($totalRecord/$recordPerPage);
			//lay bien page truyen tu url
			$page = isset($_GET["p"])&&$_GET["p"]>0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by id asc limit $from,$recordPerPage");
			//tra ve tat ca cac ban ghi
			return $query->fetchAll();
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from products");
			//tra ve tong so ban ghi dem duoc
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("select * from products where id=:var_id");
			$query->execute(["var_id"=>$id]);
			//tra ve mot ban ghi
			return $query->fetch();
		}
		public function modelUpdate($id){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$name = $_POST["name"];		
			$category_id = $_POST["category_id"];	
			$discount = $_POST["discount"];
			$price = $_POST["price"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$status = isset($_POST["status"]) ? 1 : 0;
			$hot = isset($_POST["hot"]) ? 1 : 0;
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->prepare("update products set name=:var_name,category_id=:var_category_id,discount=:var_discount,price=:var_price,description=:var_description,content=:var_content,status=:var_status,hot=:var_hot where id=$id");
			$query->execute(["var_name"=>$name,"var_category_id"=>$category_id,"var_discount"=>$discount,"var_price"=>$price,"var_description"=>$description,"var_content"=>$content,"var_status"=>$status,"var_hot"=>$hot]);
			
			//---
			//neu user upload anh thi thuc hien upload
			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$oldPhoto = $conn->query("select photo from products where id=$id");
				if($oldPhoto->rowCount() > 0){
					$record = $oldPhoto->fetch();
					//xoa anh
					if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
						unlink("../assets/upload/products/".$record->photo);
				}
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---
		}
		public function modelCreate(){
			$id = isset($_GET["id"])?$_GET["id"]:0;
			$name = $_POST["name"];		
			$category_id = $_POST["category_id"];	
			$discount = $_POST["discount"];
			$price = $_POST["price"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$status = isset($_POST["status"]) ? 1 : 0;
			$hot = isset($_POST["hot"]) ? 1 : 0;
			$photo = "";
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//neu user upload anh thi thuc hien upload			
			$photo = "";
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"],"../assets/upload/products/$photo");
				$query = $conn->prepare("update products set photo=:var_photo where id=$id");
				$query->execute(array("var_photo"=>$photo));
			}
			//---			
			$query = $conn->prepare("insert into products set name=:var_name,category_id=:var_category_id,discount=:var_discount,price=:var_price,description=:var_description,content=:var_content,status=:var_status,hot=:var_hot,photo=:var_photo");
			$query->execute(["var_name"=>$name,"var_category_id"=>$category_id,"var_discount"=>$discount,"var_price"=>$price,"var_description"=>$description,"var_content"=>$content,"var_status"=>$status,"var_photo"=>$photo,"var_hot"=>$hot]);	
		}
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			//---
			//lay anh cu de xoa
			$oldPhoto = $conn->query("select photo from products where id=$id");
			if($oldPhoto->rowCount() > 0){
				$record = $oldPhoto->fetch();
				//xoa anh
				if($record->photo != "" && file_exists("../assets/upload/products/".$record->photo))
					unlink("../assets/upload/products/".$record->photo);
			}
			//---
			//update cot name
			$query = $conn->prepare("delete from products where id=:var_id ");
			$query->execute(["var_id"=>$id]);
		}
		public function modelProductsSub($category_id)
		{
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where parent_id = $category_id");
			return $query->fetchAll();
		}
		//lay danh muc cap 0
		public function modelCategories(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0");
			return $query->fetchAll();
		}
		public function modelCategoriesSub($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $category_id");
			return $query->fetchAll();
		}
		public function modelGetCategory($category_id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where id = $category_id");
			return $query->fetch();
		}
	}
 ?>