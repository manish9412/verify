<?php
include 'includes/connection.php';
   
 if(isset($_GET['del_id'])) 
 { 
             $id=$_GET['del_id']; 
             
             $sql="delete from login_data where id='".$id."'"; 
             $result=mysqli_query($conn,$sql); 
             
             header('page1.php'); 
             
 } 
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
.custom {
	background-color: #fd8200;  
height: calc(50% - 80px);
}
@media (max-width: 450px) {
.custom {
height: 100%;
}
}

</style>

</head>
<body>
  <?php
    include 'includes/header.php';
  ?>

  <div class="container-fluid  custom ">
    <h1 class="display-4 text-center text-light pt-5">Logged in users data</h1>
    <div class="text-center  justify-content-center align-items-center vh-100 ">  

     <table class="table table-borderedless table-striped  w-100  "  id="content"><?php
          include ("show.php");

        ?></table> 

        
    </div>
  </div>

  

<?php
  else:
    header('Location:sign_in.php');
?>
<?php
endif;
?>
<?php

include ("includes/footer.php");

?>
<script>
  $(document).ready(function(){
    $.ajax({url:"show.php",success:function(dataabc)
    {
      $("#content").val();
    }
  });
  });
$('#save').click(function(){
$email=$('#email').val();
$password = $('#password').val();


      $.ajax({url:"insert.php",method:"POST",data:{email:$email,password:$password},success:function(dataabc){
        window.location.href="page1.php";
      }});
    });
  
</script>
</body>
</html>