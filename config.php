<?php
		$conn = mysqli_connect("localhost", "root", "", "pharmacy");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT MAX(MED_ID) AS last_id FROM meds";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$new_med_id = $row['last_id'] + 1;
		
?>