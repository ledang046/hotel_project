<?php 
	//load file Layout.php
	$this->layoutPath = "LayoutTrangChu.php";
	$category_id = isset($_GET["category_id"])?$_GET["category_id"]:0;
 ?>
<div class="product container d-block justify-content-center">
		<div class="row d-block justify-content-center pb-4">
			<div class="col-md-12 d-block justify-content-center text-center mb-5">
				<h1><?php 
                		$category = $this->modelGetCategory($category_id);
                		echo $category->name;
                	 ?>
     			</h1>
		<h2>WELCOME TO QUIET LUXURY IN HANOI</h2>
     
      
			</div> 
        <!-- box search -->
            <div  style="justify-content: left;position: absolute; ">
         
              <label>Price from:</label>
                <input type="number" style="width:110px; margin-right: 20px; height:30px; outline: none; border:none" min="0" value="0" id="fromPrice"  />
             
               <label>To:</label> 
                <input type="number" style="width:110px; height:30px; outline: none; border:none" min="0" value="0" id="toPrice" />
            
          <button class="btn-warning" style="border-radius: 20px;border:none; " type="button"onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;"/><i class="fas fa-search"></i></button> 
           
          </div>
          <!-- end box search -->
      <div class="sort-box" style="text-align:right;justify-content: right;">
               <select style="width: 120px; border-radius: 20px;margin-left: 1000px" class="form-control" onchange="location.href = 'index.php?controller=products&action=category&category_id=<?php echo $category_id; ?>&order='+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option <?php if(isset($_GET["order"])&&$_GET["order"]=="priceAsc"): ?> selected <?php endif; ?> value="priceAsc">Giá tăng dần</option>
                  <option <?php if(isset($_GET["order"])&&$_GET["order"]=="priceDesc"): ?> selected <?php endif; ?> value="priceDesc">Giá giảm dần</option>
                  <option <?php if(isset($_GET["order"])&&$_GET["order"]=="nameAsc"): ?> selected <?php endif; ?> value="nameAsc">Sắp xếp A-Z</option>
                  <option <?php if(isset($_GET["order"])&&$_GET["order"]=="nameDesc"): ?> selected <?php endif; ?> value="nameDesc">Sắp xếp Z-A</option>
                </select>
                <!-- box search -->
       
           
          </div>
          </div>

	<div class="row" style="justify-content: space-between;">
	<!-- 	<div class="col-md-12 d-flex justify-content-center justify-content-between"> -->
 <?php foreach($data as $rows): ?>
<div class="card mb-5 mt-3" style="width:18rem;">
  <img class="card-img-top" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
  <div class="card-body">
    <h5 class="card-title products"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></h5>
    <p class="card-text"><?php echo $rows->description; ?></p>
    <p class="card-text"> <?php echo number_format($rows->price); ?>đ/đêm</p>
    <p class="card-text">Giảm giá còn: <?php echo number_format($rows->price - $rows->price*$rows->discount/100); ?> </span>₫ </p>
    <p class="card-text"><?php if(isset($rows->status)&&$rows->status == 1): ?>
                            Trạng thái:<span>Còn trống.</span>
                        <?php else: ?>
                            Trạng thái:<span>Hết phòng.</span>
                        <?php endif; ?>
    </p>
  <a type="button" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>" class="mt-2 btn btn-warning">Detail</a>
    <button type="button" class="btn btn-primary mt-2"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"><i style="color:white;" class="fas fa-luggage-cart"></i></a></button>
  </div>
</div>
<?php endforeach; ?>
  <!-- </div> -->
</div>
		</div>
<nav aria-label="Page navigation example" class="mt-5" style="display:flex;justify-content: center;">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
                  <?php for($i = 1; $i <= $numPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="index.php?controller=products&action=category&category_id=<?php echo $category_id; ?>&p=<?php echo $p; ?>"><?php echo $i; ?></a>
                    </li>
                  <?php endfor; ?>

    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>