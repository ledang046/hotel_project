<script src="assets/frontend/Js/jquery-3.5.1.js"></script>

<?php 
	//load file Layout.php
	$this->layoutPath = "LayoutTrangChu.php";

 ?>

 <div class=" sector container-fluid d-flex justify-content-center z-index 1">
      <div class="row">
        <div class="col-md-12">
      <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="banner1 carousel-item active">
      <img class="d-block w-100" src="assets/frontend/Images/nice1.jpg"alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Signature Villa</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/frontend/Images/nice2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Ocean Paragonic Villa</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/frontend/Images/nice3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>Oganic Villa</h5>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>

  </div>
   <hr style="width: 180px; padding: 4px;">
  <div class="row mt-4 d-block" style="text-align: center;"><h1>WELCOME TO THE HOTEL DEL LUNA</h1>
     <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
  </div>
  <div class="content container d-flex justify-content-center">
    <div class="row pb-4" style="background-color: white;"> 
    <div class="col-12 col-md-6">
      <img height="300px" style="width: 100%;" src="assets/frontend/Images/exterior.jpg">
    </div>
    <div class="content-right col-12 col-md-6 mt-3">
      <h1>Our hotel</h1>
      <hr>
     
     <p>Experience a relaxing and comfortable first-class stay right in the heart of Hanoi! Often praised for its attentive staff who go above and beyond to deliver exceptional service, The Oriental Jade Hotel also wows guests with a traditional Vietnamese spa, a cozy restaurant and a phenomenal rooftop pool featuring panoramic views of the city.</p>
      <p>Staying at The Oriental Jade Hotel, guests can relax at O’Spa Lotus where locally-inspired treatments provide the ultimate relaxation. For guests who want to stay fit on the go, our state-of-the-art gym facilities and outdoor pool on the 12th floor allow them to exercise in style with a stunning view of Hanoi Old Quarter.</p>
    </div>
  </div>
  </div>
  <div class="content1 container d-block justify-content-center bg-white mt-4 pb-4">
    <div class="row mt-5">
      <div class="col d-block mb-5">
    <h1 class="mb-2">Hot Booking Room</h1>
    <hr>
    <p class="ml-1 mt-2">The concept and service of the best luxury hotels in Asturias in our sophisticated.</p>
      </div>
    </div>
      <?php 
            $hotProducts = $this->modelHotProducts();
       ?>
<div class="row" style="justify-content: space-between;">
  <!--  <div class="col-md-12 d-flex justify-content-center justify-content-between"> -->
 <?php foreach($hotProducts as $rows): ?>
<div class="card mb-5 homeview-img" style="width:18rem;margin-left: 20px;margin-right: 20px; position: relative;">
   <!-- discount giam gia -->
                  <div style="width:40px; top:-10px;left: -6px; height:40px;border-radius:40px;background: black;text-align: center; line-height:40px;color: white;position: absolute;"><?php echo $rows->discount; ?>%</div>
  <!-- discount giam giá -->
  <img class="card-img-top" src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>">
  <div class="card-body">
    <h5 class="card-title products"><a href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></h5>

    <p class="card-text"><?php echo $rows->description; ?></p>

     <a type="button" href="products/detail/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>" class="mt-2 btn btn-warning">Detail</a>
    <button type="button" class="btn btn-primary mt-2"><a href="index.php?controller=cart&action=add&id=<?php echo $rows->id; ?>"><i style="color:white;" class="fas fa-luggage-cart"></i></a></button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
</div>
  </div>
</div>
<?php endforeach; ?>
  <!-- </div> -->
</div>
  </div>
      <div class ="container d-block justify-content-center bg-white mt-4 pb-4">
        <h1>Experienced now!</h1>
        <!-- form email -->
        <form method="post" accept-charset="utf-8" id="mail-form">
        <div class="row">
          <div class="col">
            <input type="email" name="emailsend" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
             <small id="emailHelp"  class="form-text text-muted ml-1">Example: example@gmail.com</small>
          </div>
          <div class="col">
            <input type="text" name="name"  class="form-control" placeholder="Your name">
          </div>
          <div class="col">
            <input type="text" name="phone"  class="form-control" placeholder="Phone Number ">
          </div>
        </div>
      <div class="row ">
         <div class="col btnconfirm d-flex justify-content-center mt-2">
          <button type="submit" name="send" id="btnsendmail" class="btn btn-outline-warning">Check Availability</button>
        </div>
      </div>
      </form>

    </div>
  <div class="container d-block justify-content-center bg-white mt-4">
    <div class="row">
      <div class="col d-block mb-5">
    <h1 class="mb-2">Our Service</h1>
    <hr style="width: 100px;
  height: 3px;
    background-color: black;
    margin: 0;
    border: 0;">
    <p class="ml-1 mt-2">We serve our guest.</p>
      </div>
      <div class="offer1-1 col col-md-12 col-sm-6 pb-4">
        <div class=" d-flex mb-5">
              <img src="assets/frontend/Images/sevice1.jpg">
              <div class="offer1-content ml-4">
                <h1>Free Drinks</h1>
                <p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
              </div>
            </div>
            <div class =" d-flex mb-5">
              <img src="assets/frontend/Images/sevice2.jpg">
              <div class="offer1-content  ml-4">
                <h1>Buffet Dinner</h1>
                <p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
              </div>
            </div>
            <div class=" d-flex mb-5">
              <img src="assets/frontend/Images/sevice3.jpg">
              <div class="offer1-content  ml-4">
                <h1>Elegant Dinner</h1>
                <p>The concept and service of the best luxury hotels in Asturias in our sophisticated Urban Double and Unique Junior Suite rooms, with the possibility of enjoying a furnished terrace in our Double Urban Loft and Unique Junior Loft Suite.</p>
              </div>
            </div>
            <button type="button"  class="btn btn-dark ml-5 float-right"><a style="text-decoration: none; color: white;" href="index.php?controller=service">More service</a></button>
      </div>
    </div>
  </div>
   <script type="text/javascript">
  $(document).ready(function()
  { 
    var submit = $("#btnsendmail");
    submit.click(function()
    {
    var data = $('#mail-form').serialize();
      $.ajax({
          type : 'POST', 
          data : data,
          dataType:'html',
          url : "views/sendmail.php",
          success : function(data)
          {
            alert("Gửi email thành công");
          }
  });
  return false;
 });
});
</script>