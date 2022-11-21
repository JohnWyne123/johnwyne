<?php
$connect = new PDO("mysql:host=localhost;dbname=covid_facility", "root", "");

if(isset($_POST["action"]))
{
	if($_POST["action"] == 'insert')
	{
		$data = array(
			':barangay'		=>	$_POST["barangay"]
		);

		$query = "INSERT INTO db_patient (barangay) VALUES (:barangay)";

		$statement = $connect->prepare($query);

		$statement->execute($data);

		echo 'done';
	}

	if($_POST["action"] == 'fetch')
	{
		$query = " SELECT barangay, COUNT(id) AS Total FROM db_patient GROUP BY barangay";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'barangay'		=>	strtoupper($row["barangay"]),
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}
?>