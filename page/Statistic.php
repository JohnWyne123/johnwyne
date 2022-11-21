<?php
$connect = new PDO("mysql:host=localhost;dbname=covid_facility", "root", "");

if(isset($_POST["action"])){
	if($_POST["action"] == 'insert'){
		$data = array(':status'=>$_POST["status"]);

		$query = "INSERT INTO db_patient (status) VALUES (:status)";

		$statement = $connect->prepare($query);

		$statement->execute($data);
	}

	if($_POST["action"] == 'fetch')
	{
		$query = " SELECT status, COUNT(id) AS Total FROM db_patient GROUP BY status";

		$result = $connect->query($query);

		$data = array();

		foreach($result as $row)
		{
			$data[] = array(
				'status'=>strtoupper($row["status"]),
				'total'=>$row["Total"],
				'color'=>'#' . rand(100000, 999999) . ''
			);
		}

		echo json_encode($data);
	}
}
?>