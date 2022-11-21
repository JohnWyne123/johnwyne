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
	if (isset($_POST['uname'])&& isset($_POST['pass'])){
		function validate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$username = validate($_POST['uname']);
		$password = validate($_POST['pass']);
		$rec_sub = mysqli_query($openconnection, "SELECT * FROM login WHERE username ='$username' AND password ='$password'");
		$record_sub = mysqli_fetch_array($rec_sub);
		$fetch_user = $record_sub['username'];
		$fetch_pass = $record_sub['password'];
		$fetch_usertype = $record_sub['usertype'];
		if($username == $fetch_user && $password == $fetch_pass && $fetch_usertype=='admin'){
		 	header("Location: http://localhost/Covid Management System/page/stat.php");
		}elseif ($username == $fetch_user && $password == $fetch_pass && $fetch_usertype=='user') {
			header("Location: http://localhost/Covid Management System/page/cbrgy.php");
		}else{
			header("Location: index.php?error=Incorrect Username or Password.");
		}
	}else{
		header("Location: index.php");
		exit();
		}
?>