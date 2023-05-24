<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");
	//cand faci buildu pentru aplicatie schimba locatia cu asta "D:\LicentaClientAppTest\LicentaClientApp_Data\UsernameHolder.txt" sau locatia unde e buildu !!!!!!!!!!!!!!!!!
	$filename = "D:\LicentaClientApp\Assets\UsernameHolder.txt";    
	$fp = fopen($filename, "r+");//open file in read mode    
  
	$contents = fread($fp, filesize($filename));//read file 
	ftruncate($fp, 0);    
	fclose($fp);//close file    


	 $query = "SELECT * FROM anunturibeneficiari WHERE username LIKE '%$contents%' ORDER BY id DESC";
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

	 