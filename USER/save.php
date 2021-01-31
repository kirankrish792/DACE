<?php
	$username = $_POST['name'];
	$password = $_POST['password'];  
			$data_file = fopen("".$username.".txt","w");
	fwrite($data_file, "User name:" . $username . " " . "Password:" . $password);
	fclose($data_file);	
?>