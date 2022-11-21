<?php
	session_start();
	$msg = '';
	$output = '';
	$barangay ='';
	$name = '';
	$contact = '';
	$id = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost','root','','covid_facility');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}

	if (isset($_POST['submit'])) {
		$barangay = $_POST['barangay'];
		$check = mysqli_query($db," SELECT * FROM db_barangay WHERE barangay='$barangay'");
		if (mysqli_num_rows($check)>0) {
			header("Location: brgy.php?error=Room already exist.");
		}else{
		$name = $_POST['name'];
		$contact =$_POST['contact'];
		$query = "INSERT into db_barangay (barangay, name, contact) VALUES ('$barangay','$name','$contact')"
		or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location: brgy.php');
	}
}
	//update records
	if (isset($_POST['update'])) {
		$barangay = $_POST['barangay'];
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$id = $_POST['id'];

		mysqli_query($db, "UPDATE db_barangay SET barangay='$barangay', name='$name', contact='$contact' WHERE id=$id ");
		
		header('location: brgy.php');
	}
	if(isset($_GET['delete'])){
		$db->query("DELETE FROM db_barangay WHERE id='".$_GET['delete']."'") or die($db->error());
		//$_SESSION['msg'] = "Information has been deleted";
		header('location: brgy.php');
	}
	//retrieve records
	$result = mysqli_query($db,"SELECT * FROM db_barangay order by barangay");
?>