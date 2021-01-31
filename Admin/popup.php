<?php
	// Set the current working directory 
	$directory = getcwd()."/";
	// Initialize filecount variavle 
	$filecount = 0; 
	$files2 = glob( $directory ."*" ); 
	if( $files2 != false ) { 
    	$filecount = count($files2);
	}
		if($filecount>10){
			function  createConfirmationmbox(){
    		echo '<script type="text/javascript"> ';
    		
   		 	echo 'alert("EMERGENCY SITUATION ..FIRE ALERT: ");';
   			echo '</script>';

    		$fliecount = 0;
		}
		createConfirmationmbox();
	}
	
else{
		header("Location:/user ");
		exit();
	}
			   
?>

