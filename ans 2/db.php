<?php

	
	$connection = mysqli_connect("localhost", "root", "", "wefinal");
		
	if ( $connection ){
		//echo "We are Connected with the DataBase";
	}
	else{
		die("Connection Failed " . mysqli_error($connection) );
	}

?>