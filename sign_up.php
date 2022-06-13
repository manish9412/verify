<?php
include 'includes/connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign_up Page</title>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  	.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
form
{	
	padding: 30px;
	
	box-shadow: 2px 5px 6px black , -4px -5px 6px black;
	background-color: white;
	border-radius: 20px;
}
.custom {
	background-color: #fd8200;
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.custom {
height: 100%;
}
}
.img-fluid
{
	height: 150px;
}
  </style>

</head>
<body>
<section class="vh-100">
  <div class="container-fluid custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="assets/images/image.png" class="img-fluid " alt="Company image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">
        <form action="insert.php" method="POST" >
          <h2 class=" text-primary text-center pb-4 font-weight-normal ">Register here <i class="fa fa-user"></i></h2>

          <!-- input -->
          <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control form-control-lg" placeholder="Enter your Full Name" name="Name" required="required"/>
            <label class="form-label" for="name" >Full Name</label>
          </div>
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter a valid email address" name="Email" required="required" />
            <label class="form-label" for="email">Email address</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="pass" class="form-control form-control-lg" placeholder="Enter password" name="Password" required="required" />
            <label class="form-label" for="pass">Password</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="cpass" class="form-control form-control-lg" placeholder="Confirm password" name="CPassword" required="required" />
            <label class="form-label" for="cpass">Confirm Password</label>
          </div>



          <div class="text-center text-lg-start py-5">
            <button type="submit" class="btn btn-primary btn-lg float-left " style="padding-left: 2.5rem; padding-right: 2.5rem; " name="create"> Create Account</button>
            <a href="sign_in.php" class="btn btn-primary btn-lg float-right px-5">Login Account</a>

          </div>

        </form>
      </div>
    </div>
  </div>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-facebook-f"></i>
      </a>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-twitter"></i>
      </a>
      <a href="#" class="text-white me-4 mx-2">
        <i class="fa fa-google"></i>
      </a>
      <a href="#" class="text-white">
        <i class="fa fa-linkedin-in"></i>
      </a>
    </div>
  </div>
</section>
</body>
</html>