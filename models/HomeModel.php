<?php 
	trait HomeModel{
		// lay 6 san pham noi bat
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
		//lay cac danh muc co san pham
		public function modelCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where categories.id in (select category_id from products where products.category_id = categories.id)");
			return $query->fetchAll();
		}
		//lay cac san pham thuoc danh muc
		public function modelProducts($category_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id=$category_id order by id desc limit 0,6");
			return $query->fetchAll();
		}
		public function modelHotNews(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by id desc limit 0,6");
			return $query->fetchAll();
		}
	}
 ?>