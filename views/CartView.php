<?php 
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
<?php if (isset($_SESSION["cart"]) == true): ?>
<link rel="stylesheet" type="text/css" href="assets/frontend/Css/cart.css">
<div class="wrap cf" style="margin-top: 100px;">
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="allroom" class="continue">Continue Booking</a>
  </div>
  <?php if (isset($_SESSION["cart"]) == true): ?>
    <form action="index.php?controller=cart&action=update" method="post">
  <div class="cart">
    <ul class="cartWrap">
     <?php foreach($_SESSION['cart'] as $product): ?>   
      <li class="items even">
       <div class="infoWrap"> 
        <div class="cartSection info" style="position: relative;">
             
        <img src="assets/upload/products/<?php echo $product['photo']; ?>" alt="hi" class="itemImg" />
          <p class="itemNumber">#QUE-007544-002</p>
          <h3><a href="products/detail/<?php echo $product['id']; ?>/<?php echo Unicode::removeUnicode($product['name']); ?>"><?php echo $product['name']; ?></a></h3>
        
          <p> <input type="number" style="width:50px" id="qty" min="1" class="input-control qty" value="<?php echo $product['number']; ?>" name="product_<?php echo $product['id']; ?>" required="Không thể để trống"> x  <?php echo number_format($product['price']); ?>₫ </p>
        
           <div style="position:absolute;left:350px;top:-7px">
          <label for="birthday">Check-in:</label><br>
            <input type="date" value="<?php echo $product['checkin']->format('Y-m-d'); ?>" id="" name="checkin_<?php echo $product['id']; ?>" >
            <br>
            <label for="birthday">Check-out:</label>
            <input type="date" value="<?php echo $product['checkout']->format('Y-m-d'); ?>" id="" name="checkout_<?php echo $product['id']; ?>" >
          </div>
          <br>
          <p class="stockStatus">Giảm giá còn: <?php echo number_format($product['price']-$product['price']*$product['discount']/100); ?>₫</p>
         
          
        </div>  
    
        
        <div class="prodTotal cartSection">
          <p><?php echo number_format($product['number']*$product['price']-$product['price']*$product['discount']/100); ?>₫</p>
        </div>
    
            <div class="cartSection removeWrap">
              <a href="index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>" data-id="2479395"><i class="fa fa-trash"></i></a>
        </div>
         </div>
      
      </li>
       <?php endforeach; ?>     
    </ul>
  </div>
  <?php if($this->cartNumber() > 0): ?>
  <div class="updatedelete">
  <input type="submit" class="btnupdatedelete" value="Update">
    <a href="index.php?controller=cart&action=destroy" class="btnupdatedelete">Delete cart</a>
 </div>
  <?php endif; ?>
  </form>
<?php endif; ?>
  <div style="margin-top: 30px;" class="promoCode"><label for="promo">Have A Promo Code?</label><input type="text" name="promo" placholder="Enter Code" />
  <a href="#" class="btn"></a></div>
   
  <div class="subtotal cf">
    <ul style="list-style: none;">
          <li class="totalRow"><span class="label">Fax</span><span class="value">0đ</span></li>

            <li class="totalRow final"><span class="label">Total</span><span class="value">  <?php echo number_format($this->cartTotal()); ?>₫ </span></li>
       <?php if($this->cartNumber()>0): ?>
      <li class="totalRow"><a href="index.php?controller=cart&action=checkout" class="btn continue">Order</a></li>
      <?php endif ?>
    </ul>
  </div>
</div>
<?php else: ?>
    <div class="container text-center" style="margin-top: 200px;height: 400px;color: black;">
      <h1 class="mt-5">Your Cart Is Empty</h1>
       <a href="home" style="color:black;font-size:30px;">Return Home</a>  
    </div>
<?php endif; ?>