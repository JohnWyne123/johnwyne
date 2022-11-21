	<?php
	//session_start();
	$room = '';
	$capacity = '';
	$id = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost','root','','covid_facility');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	// $count = "SELECT room,COUNT(*) AS bilang FROM db_patient GROUP BY room";
	// $result_total = mysqli_query($db,$count);
	// while ($total = mysqli_fetch_array($result_total)) {
	// 	$output = $total['bilang'];
	// }

	if (isset($_POST['submit'])) {
		$room = $_POST['room'];
		$check = mysqli_query($db," SELECT * FROM db_room WHERE room='$room'");
		if (mysqli_num_rows($check)>0) {
			header("Location: roomm.php?error=Room already exist.");
		}else{
		$capacity = $_POST['capacity'];
		$query = "INSERT into db_room(room,capacity) VALUES ('$room','$capacity')" or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location: roomm.php');
}
}
	//update records
	if (isset($_POST['update'])) {
		$room = $_POST['room'];
		$capacity = $_POST['capacity'];
		$occupied = $_POST['occupied'];
		$id = $_POST['id'];

		mysqli_query($db, "UPDATE db_room SET room='$room', capacity='$capacity', occupied='$occupied' WHERE id=$id ");
		//$_SESSION['msg'] = "Information has been updated";
		header('location: roomm.php');
	}
	if(isset($_GET['delete'])){
		$db->query("DELETE FROM db_room WHERE id='".$_GET['delete']."'") or die($db->error());
		//$_SESSION['msg'] = "Information has been deleted";
		header('location: roomm.php');
	}

	$Result = mysqli_query($db,"SELECT * FROM db_room order by room");
?>