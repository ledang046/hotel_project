<?php 
	$this->layoutPath = "LayoutTrangChu.php";
 ?>

<div class="container pb-5 pt-4	"  style="margin-top:200px;background-image:url('assets/frontend/Images/bg_palm.png');background-color: white;border:1px solid black; border-radius: 20px;">
	<h5>Contact us to get detail about this activity.</p>
	<ul style="margin-top: 3px;;list-style-type: none;">
          <li><i class="fas fa-phone"></i> 0921824228</li>
          <li><i class="fas fa-envelope"></i> ledang046@gmail.com</li>
          </ul>
  <div class="row col-12">
    <div class="col-6">
 	<h1 style="font-family: Blippo, fantasy; color: gray;"><?php echo $record->name;?> at Hotel del Luna</h1>
	<p><?php echo $record->content;?></p>			
</div>
    <div class="col-6" style="margin-top: 100px;">
     	<img width="100%;" src="assets/upload/products/<?php echo $record->photo; ?>">
    </div>
  </div>
  </div>