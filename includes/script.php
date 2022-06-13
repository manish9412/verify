<script src="assets/js/sweetalert.min.js"></script>

<?php
	if (isset($_SESSION['is_login']) )
	{
		?>
		<script>
			swal("<?php echo $_SESSION['is_login']; ?> ", "<?php echo $_SESSION['message']; ?> ", "<?php echo $_SESSION['status']; ?>");
		</script>
		<?php

		if ($_SESSION['status'] == 'success') 
		{	
			header("refresh:3;url=logged.php");
		}
		else
		{
			header("refresh:4;url=sign_up.php");
		}

	}

?>
