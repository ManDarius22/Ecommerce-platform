<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");

  
	 $query = "SELECT * FROM beneficiari";
	 $result = mysqli_query($conn,$query); 

	 if($result)
	 {
	 	while($row = mysqli_fetch_assoc($result))
	 	{
			echo $row["id"] . "," . $row["email"] . "," . $row["nume"] . "," . $row["tip"]. "," . $row["cui"] . "*";

	 	}

	 }
	 else
	 {
	 	echo "Error";
	 }