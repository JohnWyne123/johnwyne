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
	if (isset($_POST['uname'])&& isset($_POST['cpassword'])&& isset($_POST['updatedata'])){
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['uname']);
		$password = validate($_POST['cpassword']);
		$npassword = $_POST['npassword'];
		$rnpassword = $_POST['rnpassword'];
		$rec_sub = mysqli_query($openconnection, "SELECT * FROM login WHERE username ='$username' AND password ='$password'");
		$record_sub = mysqli_fetch_array($rec_sub);
		$fetch_user = $record_sub['username'];
		$fetch_pass = $record_sub['password'];
		if($username == $fetch_user && $password == $fetch_pass){
			if ($npassword == $rnpassword) {
				mysqli_query($openconnection, "UPDATE login SET password='$npassword' WHERE username='$username'");
				echo '<script> alert("Your Password has been Change!"); </script>';
            	header("Location:account.php");
			}else{
				header("Location: account.php?error=Password did not match!");
			}
		}else{
			header("Location: account.php?error=Incorrect Username or Password.");
		}
	}else{
		header("Location: account.php");
		exit();
		}
?>