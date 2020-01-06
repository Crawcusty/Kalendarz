<?php
	      
	$host = "localhost";
$user = "root";
$password = "";
$name = "kalendarz";
	
		    $con = mysqli_connect($host, $db_user, $db_password, $db_name);
	    
		if ($con->connect_error) {
	    die("Connection failed: " . $link->connect_error);
	}
	?>
