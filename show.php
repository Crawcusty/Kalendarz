
<?php
	include("connect.php");
	$sql = "SELECT * FROM wydarzenia";
	 
	$records = mysqli_query($con,$sql);
	 if(!mysqli_query($con,$sql))
	 {
		 echo 'Nie udało się nic wyświetlić.';
	 }
	
	 ?>
