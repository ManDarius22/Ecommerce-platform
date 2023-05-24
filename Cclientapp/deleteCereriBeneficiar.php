<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");

	$rowtodelete = $_POST["rowtodelete"];

	$query = "DELETE FROM beneficiari WHERE id='$rowtodelete'";
	$result = mysqli_query($conn,$query); 

	if($result !== FALSE)
	{
   		echo("The row has been deleted.");
	}else{
	   echo("The row has not been deleted.");
	}