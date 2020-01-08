
<?php

include("connect.php");



$sql = "TRUNCATE `kalendarz`.`wydarzenia`";
 if(!mysqli_query($con,$sql))
 {
	 echo 'Nie można zresetowac tabeli';
 }
 else
 {
	 echo 'Tabela została zresetowana.';
 }
 
 header("refresh:2; url=index.html");



?>
