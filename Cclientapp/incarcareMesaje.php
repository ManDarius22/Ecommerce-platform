<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");
	
	$filename = "D:\LicentaClientApp\Assets\UsernameHolder.txt";    
	$fp = fopen($filename, "r+");//open file in read mode    
  
	$contents = fread($fp, filesize($filename));//read file 
	//ftruncate($fp, 0);    
	fclose($fp);//close file    


	 $query = "SELECT DISTINCT expeditor FROM mesajeuseri WHERE username LIKE '%$contents%' ";
	 $result = mysqli_query($conn,$query); 

	 if($result)
	 {
	 	while($row = mysqli_fetch_assoc($result))
	 	{
			echo $row["expeditor"] . "*";

	 	}

	 }
	 else
	 {
	 	echo "Error";
	 }