  <?php 
	//load file Layout.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?> 
  <link rel="stylesheet" href="assets/admin/layout1/css/stylelogin.css">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
        
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
              <div class="text w-100">
                <h2>Welcome to login</h2>
                <p>Don't have an account?</p>
                <a href="index.php?controller=account&action=register" class="btn btn-white btn-outline-white">Sign Up</a>
              </div>
            </div>
            <div class="login-wrap p-4 p-lg-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                
              </div>
              <form method="post" action="index.php?controller=account&action=loginPost" class="signin-form">
                <div class="form-group mb-3">
                  <label class="label" for="name">Username</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" value="Login" class="form-control btn btn-primary submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <div class="form-check">
                  <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                   <label class="form-check-label" for="exampleCheck1">Remember me</label>
                  </div>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="assets/admin/layout1/js/jquery.min.js"></script>
  <script src="assets/admin/layout1/js/popper.js"></script>
  <script src="assets/admin/layout1/js/bootstrap.min.js"></script>
  <script src="assets/admin/layout1/js/main.js"></script>
        