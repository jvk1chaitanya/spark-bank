
<?php
	$servername = "localhost";
	$username = "id16777736_spark1";
	$password = "chaituJ100@123";
	$dbname = "id16777736_spark";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
