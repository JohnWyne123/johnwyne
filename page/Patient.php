<?php
	include_once ('Room.php');
	include('Barangay.php');
	//session_start();
	$name ='';
	$contact = '';
	$barangay = '';
	$age = '';
	$gender ='';
	$status = '';
	$room = '';
	$discharge = 'Y-m-d h:i:s';
	$id = 0;
	$edit_state = false;

	$db = mysqli_connect('localhost','root','','covid_facility');
	if (!$db) {
		die("Connection Error: ". mysqli_connect_error());
	}
	if (isset($_POST['ptsubmit'])) {
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$barangay = $_POST['barangay'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$status = $_POST['status'];
		$room = $_POST['room'];
		$check = mysqli_query($db," SELECT * FROM db_patient WHERE name='$name'");
		if (mysqli_num_rows($check)>0) {
			header("Location: pnt.php?error=Patient name is already exist.");
		}else{
		$rec_sub = mysqli_query($db, "SELECT * FROM db_room WHERE room='$room'");
		$record_sub = mysqli_fetch_array($rec_sub);
		$fetch_room = $record_sub['room'];
		$fetch_occupied = $record_sub['occupied'];
		if($room==$fetch_room){
			$sub_count = $fetch_occupied + 1;
			mysqli_query($db, "UPDATE db_room SET occupied=$sub_count WHERE room='$room'");
		}
	}
		$datenow = gmdate('Y-m-d h:i:s');
		$query = "INSERT into db_patient(name,contact,barangay,gender,age,status,room,dateofconfine) VALUES ('$name','$contact','$barangay','$gender','$age','$status','$room', '$datenow')"
		or die(mysqli_error());
		mysqli_query($db, $query);
		//$_SESSION['msg'] = "Information has been saved";
		header('location: pnt.php');
	}
	if (isset($_POST['ptback'])) {
		$room = $_POST['room'];
		$rec_up = mysqli_query($db, "SELECT * FROM db_room WHERE room='$room'");
		$record_up = mysqli_fetch_array($rec_up);
		$fetchup_room = $record_up['room'];
		$fetchup_occupied = $record_up['occupied'];
		if($room==$fetchup_room){
			$up_count = $fetchup_occupied + 1;
			mysqli_query($db, "UPDATE db_room SET occupied=$up_count WHERE room='$room'");
		}
		$id = $_POST['id'];
		mysqli_query($db, "UPDATE db_patient SET room='$room' WHERE id=$id ");
		//$_SESSION['msg'] = "Information has been updated";
		header('location: pnt.php');
	}
	//update records
	if (isset($_POST['ptupdate'])) {
		$name = $_POST['name'];
		$contact = $_POST['contact'];
		$barangay = $_POST['barangay'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$status = $_POST['status'];
		$room = $_POST['room'];
		$datenow = gmdate('Y-m-d h:i:s');
		$rec_up = mysqli_query($db, "SELECT * FROM db_room WHERE room='$room'");
		$record_up = mysqli_fetch_array($rec_up);
		$fetchup_room = $record_up['room'];
		$fetchup_occupied = $record_up['occupied'];
		if($room==$fetchup_room){
			$up_count = $fetchup_occupied + 1;
			mysqli_query($db, "UPDATE db_room SET occupied=$up_count WHERE room='$room'");
		}
		$id = $_POST['id'];
		mysqli_query($db, "UPDATE db_patient SET name='$name', contact='$contact', barangay='$barangay', gender='$gender', age='$age', status='$status', room='$room', dateofconfine='$datenow' WHERE id=$id ");
		//$_SESSION['msg'] = "Information has been updated";
		header('location: pnt.php');
	}
	if(isset($_GET['ptdelete'])){
		$id = $_GET['ptdelete'];
		$rec_del = mysqli_query($db, "SELECT * FROM db_patient WHERE id=$id");
		$record_del = mysqli_fetch_array($rec_del);
		$name = $record_del['name'];
		$contact = $record_del['contact'];
		$barangay = $record_del['barangay'];
		$gender = $record_del['gender'];
		$age = $record_del['age'];
		$status = $record_del['status'];
		$room = $record_del['room'];
		$rec_room = mysqli_query($db, "SELECT * FROM db_room WHERE room='$room'");
		$record_room = mysqli_fetch_array($rec_room);
		$fetchdel_room = $record_room['room'];
		$fetchdel_occupied = $record_room['occupied'];
		if($room==$fetchdel_room){
			$del_count = $fetchdel_occupied - 1;
			mysqli_query($db, "UPDATE db_room SET occupied=$del_count WHERE room='$room'");
		}
		$id = $record_del['id'];
		$del = "DELETE FROM db_patient WHERE id=$id";
		mysqli_query($db, $del);
		//$_SESSION['msg'] = "Information has been deleted";
		header('location: pnt.php');
	}
	if (isset($_POST['discharge'])) {
		$status = $_POST['status'];
		$disc = gmdate('Y-m-d h:i:s');
		$id = $_POST['id'];
		mysqli_query($db, "UPDATE db_patient SET status='$status', dateofdischarge='$disc' WHERE id=$id");
		//$_SESSION['msg'] = "Information has been updated";
		header('location: pnt.php');
	}
	//retrieve records
	$results = mysqli_query($db,"SELECT * FROM db_patient order by name");
?>