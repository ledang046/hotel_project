
	<?php 
		//kết nối csdl
		//kết nối csdl sử dụng PDO, trả kết quả về biến kết nối
		class Connection{
				public static function getInstance()
				{
					//kết nối csdl sử dụng PDO, trả kết quả về biến kết nối
					//new PDO("connect string","username","password")
					// $conn = new PDO("mysql:host=sql305.byethost10.com;dbname=b10_28931847_hotel","b10_28931847","Dang1234");
					$conn = new PDO("mysql:host=localhost;dbname=hotel","root","");
					// lấy dự liệu theo kiểu unicode
					$conn->exec("set names utf8");
					// lấy kết quả trả về theo object
					$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
					return $conn;
				}
			}
	 ?>