<?php 
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
   <script type="text/javascript" src="../assets/admin/ckeditor/ckeditor.js"></script>
 <div class="activities container d-block bg-white justify-content-between">
			<div class="row d-flex mb-5">
				<div class="col-md-12">
					<h1 style="text-align: center;">Our activities</h1>
					<hr>
					<p style="text-align: center;">Surrounded by galleries, boutiques, restaurants and cafés, our Hotel is a hub of energy and style.</p>
				</div>
			</div>
			<?php foreach($data as $rows): ?>
			<div class="row d-flex mb-5" style="position:relative;">
				<div class="col-md-5">
					<img src="assets/upload/products/<?php echo $rows->photo; ?>">
				</div>
				<div class="col-md-7 d-block">
					<h1 style=""><?php echo $rows->name; ?></h1>
					<p><?php echo $rows->description; ?></p>
						

				</div>
				<button style="position:absolute;right:30px;bottom: 0;" type="button" class="btn btn-dark"><a style="text-decoration: none; color:white;" href="activities/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>">Learn more</a></button>
			</div>

			<?php endforeach; ?>

			
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
                    <li class="page-item"><a class="page-link" href="index.php?controller=activities&p=<?php echo $i; ?>">
                    	<?php echo $i; ?>
                    </a>
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