<!DOCTYPE html>
<html>
<head>
  <!--  -->
 <!--  <base href="http://ledang046.byethost10.com/hotel_project/"> -->
 <base href="http://localhost/hotel_project/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device,initial-scale=1.0">
  <link rel="stylesheet" href="assets/frontend/Bootstrap/bootstrap.min.css">
  <meta name="viewport" content="width=device,initial-scale=1.0">
  <title>Hotel</title>
  <link rel="stylesheet" type="text/css" href="assets/frontend/Css/style1.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/../assets/admin/layout1/css/font-awesome.min.css">
</head>
<script type="text/javascript" src="../assets/frontend/ckeditor/ckeditor.js"></script>
<body>
  
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60ca02b77f4b000ac037ef60/1f8ahl84s';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
 <?php include "views/HeaderView.php"; ?>
  <!-- start main -->
<?php echo $this->view; ?>
  <!-- end main -->
  <footer>
  <div class="container-fluid d-flex justify-content-center mt-5">
    <div class="row pt-2">
      <div class="col-md-3">
        <h1>Hotel Del Luna</h1>
            <p>Leather detail contrastic colour contour stunning silhouette working peplum. Statement buttons patch.</p>
           <i class="fab fa-twitter-square"></i>
           <i class="fab fa-facebook-square"></i>
           <i class="fab fa-linkedin"></i>
           <i class="fab fa-pinterest-square"></i>
      </div>
      <div class="col-md-3">
        <h1>Navigation</h1>
            <ul style="display:block;" class="nav">
          <li><a href="home">Home</a></li>
          <li class="dropdown-rooms"><a href="allroom">Rooms</a>
          </li>
          <li><a href="location">Location</a></li>
          <li><a href="activities">Activities</a></li>
          <li><a href="contact">Contact</a>
            </ul>
      </div>
      <div class="col-md-3">
        <h1>Contact</h1>
            <p>76/A, Green Lane, Dhanmondi, NYC</p>
            <p>10 (87) 738-3940</p>
            <p>ledang046@gmail.com</p>
      </div>
      <div class="col-md-3">
        <h1>News letter</h1>
            <p>Subscribe our newsletter to get updates.</p>
            <input type="text" name="email" placeholder="Enter your email"><br>
            <button>Send</button>
      </div>
    </div>
  </div>
</footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/frontend/Js/jquery-3.5.1.js"></script>
  <script type="text/javascript" src ="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
  <script type="text/javascript" src="assets/frontend/Js/script.js"></script>
</body>
</html>
