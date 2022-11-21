//CHANGE PASSWORD
<?php
 	$hostname="localhost";
	$username="root";
	$dbpass="";
	$dbname="covid_facility";

	$openconnection = mysqli_connect($hostname,$username,$dbpass,$dbname);
	if (!$openconnection) {
		die("Connection Error: ". mysqli_connect_error());
	}
	session_start();
	if (isset($_POST['updatedata'])){
		$password = $_POST['cpassword'];
		$npassword = $_POST['npassword'];
		$rnpassword = $_POST['rnpassword'];
		$rec_sub = mysqli_query($openconnection, "SELECT * FROM login WHERE password ='$password'");
		$record_sub = mysqli_fetch_array($rec_sub);
		$fetch_pass = $record_sub['password'];
		if($password == $fetch_pass){
			if ($npassword == $rnpassword) {
				mysqli_query($openconnection, "UPDATE login SET password='$npassword' WHERE password='$password'");
				header("Location: caccount.php?success=Your Password has been Changed!");
			}else{
				header("Location: caccount.php?error=Password did not match!");
			}
		}else{
			header("Location: caccount.php?error=Wrong Password.");
		}
	}else{
		header("Location: caccount.php");
		exit();
		}
?>