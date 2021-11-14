
<?php 
  //load file Layout.php
  $this->layoutPath = "LayoutTrangChu.php";
  $category_id = isset($_GET["category_id"])?$_GET["category_id"]:0;
 ?>
<div class="order container">
	<h1 style="text-align: center;">Room Details</h1>
              <div class="row py-3 alert alert-dismissible fade show order_list mt-4" role="alert" style="background-color:white;border: 1px solid black;">
                        <div class="col-xl-4">
                           <img style="width:120%;"src="assets/upload/products/<?php echo $record->photo; ?>" class="card-img-top" alt="..."> 
                        </div>
                        <div class="col-xl-5" style="margin-left:60px;">
                            <h1 style="font-size:25px;"><?php echo $record->name; ?>&nbsp;<span>Room</span></h1>
                            <div class="mb-3 rooms-detail">
                              <p> Loại phòng:&nbsp; <span> 
        					  	<?php
        					    $category = $this->modelGetCategory($record->category_id);
          						  echo isset($category->name) ? $category->name : "";
          						?></span></p>
          						<p><span>Giá gốc: </span><?php echo number_format($record->price); ?>₫/đêm </p>
          						
          						<p><span>Đang giảm giá còn: </span><?php echo number_format($record->price - $record->price * $record->discount/100); ?>₫/đêm </p>
          						<p><span>Trạng thái phòng: </span><?php if(isset($rows->status)&&$rows->status == 1): ?>
                      												 <span>Còn trống.</span>
                       												<?php else: ?>
                      												 <span>Hết phòng.</span>
                      											  <?php endif; ?></p>
          						<p>Giới thiệu: <?php echo $record->description; ?></p>
          						<p>Dịch vụ: <?php echo $record->content; ?></p>
          						
                            </div>

                        </div>

                         <div style="margin-left:25px;" class="col-xl-2">
                                  
                                 <a href="index.php?controller=cart&action=add&id=<?php echo $record->id; ?>" style="border-radius:50px; font-size:20px;" class="btn btn-warning"><i class="fas fa-plus"></i>&nbsp;Add to cart</a>
                                
                        </div>
                          
                    </div>
                   
                   
               </div>