<?php
$connect = new PDO("mysql:host=localhost;dbname=covid_facility", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':room'		=>	$_POST["room"]
		);

		$query = "INSERT INTO db_patient (room) VALUES (:room)";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = " SELECT room, COUNT(id) AS Total FROM db_patient GROUP BY room";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'room'		=>	strtoupper($row["room"]),
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}
?>