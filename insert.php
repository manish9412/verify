
<?php 
include ("includes/connection.php");
include ("includes/header.php");


if(isset($_POST['create']))
{
	if (!empty($_POST['Name']) && !empty($_POST['Email']) && !empty($_POST['Password']) && !empty($_POST['CPassword']))
	{
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		$cpassword = $_POST['CPassword'];
		$token = bin2hex(random_bytes(15));
		$token1 = $token;
		$sql2 = "insert into sign_in(email,password,cpassword,token) values('$email','$password','$cpassword','$token')";
		$sql1 = "insert into sign_up(Name,Email,Password,CPassword,token) values('$name','$email','$password','$cpassword','$token')";
		$run2 = mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2) or die(mysqli_error());

		if ($run2 and ($password == $cpassword))
		{		
			$_SESSION['is_login'] = "Successfully Created";
			$_SESSION['message'] = "Login Now";
			$_SESSION['status'] = "success";
			$_SESSION['token'] = $token;
			
		  //   echo '<div class="alert alert-success  w-25 text-center mx-auto p-5 mt-5" role="alert">
			 // 	 <h4 class="alert-heading">Well done!</h4>
			 // 	 <p>You have successfully created Account....!!</p>
			 //  	<hr>
			 //  	<a href="sign_in.php" class="btn btn-success"> Login Now</a>
				// </div>';
		}
		else
		{
			$_SESSION['is_login'] = "Account not created";
			$_SESSION['message'] = "Check Your data";
			$_SESSION['status'] = "warning";
			#echo "Form not submitted";

		}
	}
else
{
	echo "All fields required";
}

}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Data Page</title>

	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!-- 
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="refresh" content="4, url=logged.php"> -->
 </head>
 <body>
 	<?php

    if (isset($_POST['submit'])) {
      $email = mysqli_real_escape_string($conn,trim($_POST['email']));
      $password = mysqli_real_escape_string($conn,(trim($_POST['password'])));
      $token = bin2hex(random_bytes(15));

      $query = "SELECT * FROM sign_in WHERE email='$email' AND password = '$password' ";
 	$fire = mysqli_query($conn,$query);

 	 if ($fire)
      {
       if ((mysqli_num_rows($fire) == 1) && has_equals($_SESSION['token'] == $token) )
       {
       		session_start();
       		$_SESSION['is_login'] = "Data is correct";
       		$_SESSION['email'] = $email;
       		$_SESSION['message'] = "Successfully Login";
       		$_SESSION['status'] = "success";
       		$_SESSION['password'] = $password; 
       		$_SESSION['token'] = $token;

// echo '<div class="alert alert-success w-25 text-center mx-auto p-5 mt-5" role="alert">
//   <h4 class="alert-heading">Well done!</h4>
//   <p>Your details are correct ....!!</p>
//   <hr>
//   <h4>Go to <a href="logged.php" class="btn btn-success"> Dashboard</a></h4>
  
// </div>';
}
else
{
	$_SESSION['is_login'] = "Data is Not correct";
	$_SESSION['message'] = "Check Your data";
	$_SESSION['status'] = "warning";
// echo '<div class="alert alert-danger w-25 text-center mx-auto p-5 mt-5" role="alert">
//   <h4 class="alert-heading">Oops....!</h4>
//   <p>You have enterted wrong email and password</p>
//   <hr>
//   <a href="sign_in.php" class="btn btn-danger">Login Again</a>
//   <a href="sign_up.php" class="btn btn-danger">Create Account</a>
// </div>';	
}
}
}
?>
 </body>
 </html>
 <?php 
 	include ("includes/script.php");
  ?>