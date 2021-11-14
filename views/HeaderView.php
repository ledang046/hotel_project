<script src="assets/frontend/Js/jquery-3.5.1.js"></script>
<style type="text/css">
  .search-product{ background-color: #d1ae50; border-radius: 20px; border:1px solid black; outline: none;margin-right: 5px;}
  .up-header-left button { outline: none; background:none; right:7px; position: absolute; border: none; font-size: 15px; cursor: pointer;}
   #smart-search{position:absolute;top:37px;right:20px; width:auto;;background:white; z-index: 1; display:none; max-height:300px;overflow: scroll;text-align: left;border: 1px solid black;}
      #smart-search ul{padding: 0px; margin: 0px;display: block; list-style: none;}
      #smart-search ul li{ margin-bottom: 10px; font-size:30px; padding-right: 100px; margin-top:5px;}
      #smart-search img{width:80px; margin-right: 5px;}
</style>
<script type="text/javascript">
      
      $(document).ready(function(){
        $("#key").keyup(function(){
          var key = $("#key").val();
          if(key != ""){
            $("#smart-search").attr("style","display:block;");
            //---
            $.ajax({
              url: "index.php?controller=search&action=ajax&key="+key,
              success: function( result ) {
                $( "#smart-search ul" ).empty();
                $( "#smart-search ul" ).append(result);
              }
            });
            //---
          }
          else
            $("#smart-search").attr("style","display:none;");
        });
      });
    </script>
 <header>
    <div class="container-fluid">
      <div class="up-header row">
          <div class="up-header-right col-md-6">
          <ul style="margin-top: 3px;">
          <li><i class="fas fa-phone"></i> 0921824228</li>
          <li><i class="fas fa-envelope"></i> ledang046@gmail.com</li>
          </ul>
          </div>
      <div style="position: relative;" class="up-header-left col-md-6">

        <ul>
          <?php if(isset($_SESSION["customer_name"]) == true): ?>
          <li style="position:relative;"><input class="search-product" id="key"  style="width: 200px;padding-left:10px;" id="key"><button type="button"> <i class="fa fa-search" onclick="location.href='index.php?controller=search&key='+document.getElementById('key').value;"></i> </button></li>
          <li><a href="#">Xin chào, <?php echo $_SESSION["customer_name"];  ?></a></li>
          &nbsp; &nbsp;
          <li><a href="index.php?controller=account&action=logout">Đăng xuất</a></li>
         
        <?php else: ?>
          <li style="position:relative;"><input class="search-product" id="key"  style="width: 200px;padding-left:10px;" id="key"><button type="button"> <i class="fa fa-search" onclick="location.href='index.php?controller=search&key='+document.getElementById('key').value;"></i> </button></li>
          <li><a href="index.php?controller=account&action=register">Sign-up</a></li>
          <li><a href="#" class="sign-in">Login</a></li>
          
          
       <?php endif; ?>   

        </ul>
         <div id="smart-search">
        <ul>
        
        </ul>
      </div>
      
      </div>
    </div>
      <div class="row">
        <div class="header-left col-md-3">
          <img style="width: 60%;" src="assets/frontend/Images/logo.png">
        </div>
        <div class="headermain col-md-9">
          <ul class="header-right d-flex  float-right font-weight-bold">
          <li><a href="home">Home</a></li>
          <li class="dropdown-rooms"><a href="allroom">Rooms <i class="fa fa-caret-down"></i></a>
            <div class="dropdown-rooms-content">
              <ul style="padding: 0;">
              <?php 
              //lay bien ket noi
              $conn = Connection::getInstance();
              $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
              $categories = $query->fetchAll();
           ?>
                <?php foreach($categories as $rows): ?>
                <li style="margin-bottom:7px"><a href="products/category/<?php echo $rows->id; ?>/<?php echo Unicode::removeUnicode($rows->name); ?>"><?php echo $rows->name; ?></a></li> 
                 <?php 
              $querySub = $conn->query("select * from categories where parent_id=".$rows->id);
              $categoriesSub = $querySub->fetchAll();
             ?>
             <!-- <?php foreach($categoriesSub as $rowsSub): ?>
            <li style="padding-left:20px;list-style-type: none;"><a href="products/category/<?php echo $rowsSub->id; ?>/<?php echo Unicode::removeUnicode($rowsSub->name); ?>"><?php echo $rowsSub->name; ?></a></li>
              <?php endforeach; ?> -->
                <?php endforeach; ?>
              </ul>
            </div>
          </li>
          <li><a href="location">Location</a></li>
          <li><a href="activities">Activities</a></li>
          <li><a href="contact">Contact</a>
        
          <li style="position:relative;" class="bar"><a href="allroom">Book now!</a></li>
         <div id="ex3">
           <?php 
        $number = 0;
        if (isset($_SESSION["cart"]) == true) {
        foreach($_SESSION["cart"] as $product){
          $number++;
        }
      }
       ?>
          <a href="cart">
          <span class="p1 fa-stack fa-1x has-badge" style="right:0px;top:-30px" data-count=" <?php echo $number; ?> ">
         <i class="p2 fa fa-circle fa-stack-2x"></i>
         <i class="p3 fas fa-luggage-cart fa-stack-1x fa-inverse" style="color:black;"></i>
         </span></a>



          <!-- mini-cart -->
          <link crossorigin='anonymous' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' rel='stylesheet'>
          <link rel="stylesheet" type="text/css" href="assets/frontend/Css/mini-cart.css">
        <div class='minicart'>
  <div class='minicart--item-container'>
    You have
    <span class='minicart--item-count' style='font-weight: 600'><?php echo $number; ?> items</span>
    in your cart!
  </div>
  
  <ul>
    <?php  if (isset($_SESSION["cart"]) == true): ?>
    <?php 
       foreach($_SESSION["cart"] as $product):
    ?>
    <li style="margin-left: 30px;width: 100%;" class='minicart--item'>
      <div class='placeholder'><a href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"> <img style="width: 100%" alt="<?php echo $product['name']; ?>" src="assets/upload/products/<?php echo $product['photo']; ?>" title="<?php echo $product['name']; ?>"> </a></div>
      <h2 class='title' ><a style="color:black;" href="index.php?controller=products&action=detail&id=<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h1>
      <p class='material'>
        <span style='font-weight: 600'><?php echo $product['number']; ?>x <?php echo number_format($product['price']); ?>d</span>
      </p>
     
      <p class='remove'>
        <a href='index.php?controller=cart&action=delete&id=<?php echo $product['id']; ?>'>
          <i class='fa fa-trash-o'></i>
          Remove from cart
        </a>
      </p>
    </li>
     <?php endforeach; ?>
    <?php endif; ?>
  </ul>

  <a href="index.php?controller=cart"><input type='button' value='View Cart Details' herf=""></a>
</div>

          <!-- endmini-cart -->


      </div>


          </ul>
        </div>
        
        </div>
        </div>
        <div class="sidebar">
      <h1>Sign in</h1>    
        <form method="post" action="index.php?controller=account&action=loginPost">
        <label style="margin-left:38px;">Email:</label>
        <input type="text" name="email">
         <label>Password:</label>
        <input class="txtpassword" type="password" name="password">
        <br>
        <a href="#" style="font-size:15px;">forgot password?</a>
        <ul>
          <div class="form-group">
           <button type="submit" value="Login">Login</button>
         </div>
          <li>or login with:</li>
          <li><i class="fab fa-facebook"></i></li>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-twitter"></i></li>
        </ul>
      
      </form>
          </div>  
  </header>