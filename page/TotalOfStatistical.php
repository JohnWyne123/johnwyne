<?php
	$con = mysqli_connect("localhost","root","","covid_facility");
	//status
	$status_query = "SELECT status, COUNT(*) FROM db_patient GROUP BY status";
	$result_status = mysqli_query($con,$status_query);
	//room
	
	$room_query = "SELECT room,COUNT(*) FROM db_patient GROUP BY room";
	$result_room = mysqli_query($con,$room_query);


	$cases = "SELECT barangay, COUNT(*) AS total, SUM(case when status = 'Died' then 1 else 0 end) AS DiedCount, SUM(case when status = 'Recovered' then 1 else 0 end) AS RecoveredCount, SUM(case when status = 'Asymptomatic' then 1 else 0 end) AS AsymptomaticCount, SUM(case when status = 'Symptomatic' then 1 else 0 end) AS SymptomaticCount FROM db_patient GROUP BY barangay;";
	$total = mysqli_query($con,$cases);
?>