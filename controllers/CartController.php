<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		// them san pham vao gio hang
		public function add(){
			 $id = isset($_GET["id"]) ? $_GET["id"]:0;
			 // goi ham cartAdd để them sản phẩm vào giỏ hàng
			 $this->cartAdd($id);
			 header("location:cart");
		}
		//liet ke các sản phẩm trong giỏ hàng 
		public function index(){
			// goi view
			$this->loadView("CartView.php");
		}
		//xóa sản phẩm
		public function delete(){
			 $id = isset($_GET["id"]) ? $_GET["id"]:0;
			 $this->cartDelete($id);
			 header("location:index.php?controller=cart");
		}
	
		// cập nhập sản phẩm trong giỏ hàng
		public function update(){
			foreach($_SESSION["cart"] as $product){
				$id = $product["id"];
				$soluong = $_POST["product_$id"];
				$checkout = $_POST["checkout_$id"];
				$checkin = $_POST["checkin_$id"];

				// gọi hàm cập nhập số lượng
				$this->cartUpdate($id,$soluong,$checkout,$checkin);
			}
			header("location:index.php?controller=cart");
		}
		public function destroy(){
			$this->cartDestroy();
			header("location:index.php?controller=cart");
		}
		public function checkout(){
			// kiểm tra nếu user chưa đăng nhập thì chuyển đến trang đăng nhập
			if(isset($_SESSION["customer_email"]) == false)
				header("location:index.php?controller=account&action=login");
			else{
			$this->cartCheckOut();
				header("location:index.php?index");
		}
	}
}
  ?>