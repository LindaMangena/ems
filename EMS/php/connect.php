<?php 

date_default_timezone_set('Africa/Johannesburg');

//connecting to the database
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USERNAME', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_NAME', 'ems');

$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );

if(!$conn) {
	
	die("error connecting");
	
}
//header("Refresh:0; url=submit.php");

?>