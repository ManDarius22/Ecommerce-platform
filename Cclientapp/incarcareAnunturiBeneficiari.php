<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");

  
	 $query = "SELECT * FROM anunturibeneficiari";
	 $result = mysqli_query($conn,$query); 

	 if($result)
	 {
	 	while($row = mysqli_fetch_assoc($result))
	 	{
			echo $row["id"] . "," . $row["username"] . "," . $row["tip"] . "," . $row["descriere"]. "*";

	 	}

	 }
	 else
	 {
	 	echo "Error";
	 }