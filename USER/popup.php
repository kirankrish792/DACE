<?php
	// Set the current working directory 
	$directory = getcwd()."/";
	// Initialize filecount variavle 
	$filecount = 0; 
	$files2 = glob( $directory ."*" ); 
	if( $files2 != false ) { 
    	$filecount = count($files2);
	}
		if($filecount>14){
			function  createConfirmationmbox(){
    		echo '<script type="text/javascript"> ';
    		echo 'var inputname = prompt("Power loss Enquiry", "");';
   		 	echo 'alert("Respose Submitted ");';
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

