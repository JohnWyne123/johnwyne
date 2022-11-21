<!-- CREATE USER -->
<?php
 	$db = mysqli_connect('localhost','root','','covid_facility');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['create'])) {
		$idnum = $_POST['idnum'];
		$contact = $_POST['contact'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$check = mysqli_query($db," SELECT * FROM login WHERE username='$idnum'");
		if (mysqli_num_rows($check)>0) {
			header("Location: user.php?error=Username already exist.");
		}else{
			$user = $_POST['user'];
		$query = "INSERT into login (firstname,lastname,contact,username,password,usertype) VALUES ('$fname','$lname','$contact','$idnum','$lname','$user')"
		or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location:user.php?success=Successfully Created an Account!');

}
}
$result = mysqli_query($db,"SELECT * FROM login order by firstname");
?>