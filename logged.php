<?php
include 'includes/connection.php';
session_start();

    if (isset($_SESSION['is_login'])):

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	
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
height: calc(94% - 100px);
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
.page{
    color: black !important;
    background-color: #ffffffbd !important;
    }
  .page:hover{
    background-color: black !important;
    color:white !important;
  }
  .right{
    background-color: #26020259;
  }
  </style>

</head>
<body>
  <?php
    include 'includes/header.php';
  ?>
<section class="vh-100">
  <div class="container-fluid custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-4 col-xl-5 ">
        <h1 class="display-4 text-light">Welcome to the team..!!</h1>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-4 offset-xl-1 shadow-lg p-4 mb-5 right rounded ">
        <h2 class="display-3 text-light">Explore Our Expertise Solutions</h2>
        <div class="mt-5">
        <a href="page1.php" class="btn page p-2">Show user posts</a>
        <a href="page2.php" class="btn page  p-2 ">Mobile Development</a>
        <a href="logout.php" class="btn btn-danger float-right p-2">
          <b>Logout here</b> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-secondary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. All rights reserved.
    </div>
 

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
<?php else:
header('Location:sign_in.php');
 ?>

<?php endif; ?>
</body>
</html>