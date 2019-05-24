<?php

include('connect.php');

$employee_n = $_POST['employee_name'];
$employee_s = $_POST['employee_surname'];
$employee_p = $_POST['employee_position'];
$employee_st = $_POST['employee_startDate'];

$generate_employee_num = rand(1,300);
$employee_num = "e$generate_employee_num";

		$query = mysqli_query($conn, "SELECT * FROM `employee_info`");
		$numrows =mysqli_num_rows($query);
		

			
			 $sql = "INSERT INTO employee_info (`employee_ID`, `employee_number`, `name`, `surname`, `admin`, `username`, `password`, `position`, `start-date`) VALUES (NULL, '$employee_num', '$employee_n', '$employee_s', '', '$employee_n', '$employee_n', '$employee_p', '$employee_st')";
			$results = mysqli_query($conn,$sql);
			
			if ($results) {

				echo "<div class='add_success'>$employee_n was added successfully";

			}

?>