//CREATE ADMIN
<?php
 	$db = mysqli_connect('localhost','root','','covid_facility');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['create'])) {
		$newuname = $_POST['newuname'];		
		$newpass = $_POST['newpass'];
		$new1pass = $_POST['new1pass'];
		$check = mysqli_query($db," SELECT * FROM login WHERE username='$newuname'");
		if (mysqli_num_rows($check)>0) {
			header("Location: admin.php?error=Username already exist.");
		}elseif(strlen($newpass) < 8){
			header("Location: admin.php?error=Password must be atleast 8 chars long.");
		}elseif ($newpass != $new1pass) {
				header("Location: admin.php?error=password dont match.");
		}
		else{
			$user = $_POST['user'];
		$query = "INSERT into login (username,password,usertype) VALUES ('$newuname','$newpass','$user')"
		or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location:http://localhost/Covid Management System/index.php');

}
}
?>