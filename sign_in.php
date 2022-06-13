 <?php

include 'includes/connection.php';

?>

<?php 
  if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
      $email = mysqli_real_escape_string($conn,trim($_POST['email']));
      $password = mysqli_real_escape_string($conn,md5(trim($_POST['password'])));
      $cpassword = mysqli_real_escape_string($conn,trim($_POST['cpassword']));
      
      $query = "SELECT * FROM sign_in WHERE email='$email' AND password = '$password' AND cpassword='$cpassword'";
      $fire = mysqli_query($conn,$query);
      if ($fire)
      {
        echo mysqli_num_rows($fire)."Row Found";
      }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home Page</title>
  
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
.form1
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
<?php
  include 'includes/header.php';
?>
<body>
<section class="vh-100">
  <div class="container-fluid custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
     
      <div class="col-md-12 col-lg-12 col-xl-6 offset-xl-1 ">
        <form class="form1" method="POST" action="insert.php">
          <h2 class=" text-center text-primary pb-4 font-weight-normal ">Welcome  <i class="fa fa-users"></i></h2>

          <!-- input -->
          
          <div class="form-outline mb-4">
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Enter a valid email address" name="email" required="required"/>
            <label class="form-label" for="email">Email address</label>
          </div>
          <div class="form-outline mb-3">
            <input type="password" id="pass" class="form-control form-control-lg" placeholder="Enter password" name="password" required="required" />
            <label class="form-label" for="pass">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="check" />
              <label class="form-check-label" for="check">
                Remember me
              </label>
            </div>
            <a href="#" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="sign_up.php" class="link-danger">Register</a></p>
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