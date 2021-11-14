<?php 
	//start session
	session_start();
  //load file Connection
  include "../application/Connection.php";
  //load file Controller.php
  include "../application/Controller.php"
 ?>
<!-- load dong MVC -->
<?php 
	//lay biến controller truyền url
	$controller = isset($_GET["controller"]) ? $_GET["controller"] :"Home";
	$action = isset($_GET["action"]) ? $_GET["action"] : "index";
	// gán thêm các chuỗi để thành 1 đường dẫn file controller
	// Hàm ucfirst(string) sẽ viết hoa ký tự đầu tiên 
	$fileController = "controllers/".ucfirst($controller)."Controller.php";
	$className = ucfirst($controller)."Controller";
	if(file_exists($fileController))
	{
		include $fileController;
		$obj = new $className();
		//gọi action 
		$obj->$action();

	}else{
		die("$fileController không tồn tại");
	}	
 ?>