<?php

include('connect.php');

$employeeTOEdit = $_POST['employee_ToEdit'];

		$query = mysqli_query($conn, "SELECT * FROM `employee_info`");
		$numrows =mysqli_num_rows($query);
		
		if ($employeeTOEdit == "Choose")
		{
			echo "Please choose a user";

		} else
		{
			$sql = "DELETE FROM `employee_info` WHERE `employee_info`.`username` = '$employeeTOEdit'";
			$results = mysqli_query($conn,$sql);
			
			if ($results) {

				echo "<div class='add_success'>Deleted successfully";

			}
		}

			
			 

?>