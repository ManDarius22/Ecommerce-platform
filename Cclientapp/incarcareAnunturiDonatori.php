<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");

  
	 $query = "SELECT * FROM anunturidonatori";
	 $result = mysqli_query($conn,$query); 

	 if($result)
	 {
	 	while($row = mysqli_fetch_assoc($result))
	 	{
			echo $row["id"] . "," . $row["user"] . "," . $row["tip"] . "," . $row["descriere"]. "*";

	 	}

	 }
	 else
	 {
	 	echo "Error";
	 }