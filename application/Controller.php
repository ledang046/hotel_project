<?php 
	class Controller{
		public $view = NULL;
		public $layoutPath	 = NULL;
		public function loadView($fileName,$data = NULL){
			//gán các thông số để biến $fileName thành đường dẫn hoàn cihrnh
			$fileName = "views/$fileName";
			if(file_exists($fileName)){
				ob_start();
				//sử dụng lệnh extract để biến tên key thành tên biến	
					if($data != NULL)
						extract($data);
					include $fileName;
					// đọc dữ liệu của file $fileName và ném dữ liệu vào biến $this->view
					$this->view = ob_get_contents();
				ob_end_clean();
			}
			//---
			if($this->layoutPath != NULL)
				include "views/$this->layoutPath";
			else
				echo $this->view;
		}
		//hàm xác thực đăng nhập trang admin
		public function authentication(){
			if(isset($_SESSION["admin_email"])==false)
				header("location:index.php?controller=login");
		}
	}
 ?>