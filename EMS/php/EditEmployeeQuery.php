<?php

include('connect.php');

$employeeTOEdit = $_POST['employee_ToEdit'];
$employee_n = $_POST['employee_nameToEdit'];
$employee_s = $_POST['employee_surnameToEdit'];
$employee_p = $_POST['employee_positionToEdit'];
$employee_st = $_POST['employee_startDateToEdit'];

$generate_employee_num = rand(1,300);
$employee_num = "e$generate_employee_num";

		$query = mysqli_query($conn, "SELECT * FROM `employee_info`");
		$numrows =mysqli_num_rows($query);
		

			
			 $sql = "UPDATE `employee_info` SET `name` = '$employee_n', `surname` = '$employee_s', `position` = '$employee_p', `start-date` = '$employee_st' WHERE `employee_info`.`username` = '$employeeTOEdit';";
			$results = mysqli_query($conn,$sql);
			
			if ($results) {

				echo "<div class='add_success'>Updated successfully";

			}

?>