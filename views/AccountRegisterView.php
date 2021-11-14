<?php 
	//load file Layout.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
    <!-- main -->
    <div class="signupform container d-flex justify-content-center">
    <div class="row d-flex justify-content-center">
      <div class="sign-up-content col-md-4">
          <h3>Sign up to get piority!</h3>
          <ul>
            <li>Get information about our hotel!</li>
            <li>Get sale off!</li>
            <li>Get membership.</li>
            <li>Easier to book room.</li>
          </ul>
      </div>
    <div class="formsign col-md-12 border border-dark">
        <h1>Sign-up</h1>
   <form method='post' action="index.php?controller=account&action=registerPost">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">
      Expamle:dangle@gmail.com    
   </small>
    <label for="exampleName">Your name</label>
    <input type="text" name="name" class="form-control" id="exampleName" placeholder="Your name">
  </div>
  <div class="form-group">
    <label for="exampleInputUser1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputAddress1" placeholder="Address">
     <label for="exampleInputUser1">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPhoneNumber1" placeholder="PhoneNumber">
     <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-warning" style="background-color: #d1ae50;border-color: #d1ae50;border-radius: 20px;margin-left: 110px;">Submit</button>
</form>
  </div>
    <div class="sign-up-content1">
           <h4>Đăng nhập tài khoản</h4>
         <?php if(isset($_GET["notify"]) && $_GET["notify"] == "error"): ?>
          <p>Email đã tồn tại, bạn hãy chọn email khác</p>
         <?php else: ?>
          <p>Nếu bạn chưa có tài khoản, hãy đăng ký</p>
         <?php endif; ?>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản.</p><br>
                <a href="index.php?controller=account&action=login"><button type="button" class="btn btn-dark mt-3">Sign-in</button></a>

</div>
</div>
</div>



        
        <!-- end main --> 