<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");
	
	$filename = "D:\LicentaClientApp\Assets\NameRegister.txt";    
	$fp = fopen($filename, "r+");//open file in read mode    
	$nameRegister = fread($fp, filesize($filename));//read file 
	ftruncate($fp, 0);    
	fclose($fp);//close file


	$filename2 = "D:\LicentaClientApp\Assets\UsernameRegister.txt";    
	$fp2 = fopen($filename2, "r+");//open file in read mode    
	$usernameRegister = fread($fp2, filesize($filename2));//read file 
	ftruncate($fp2, 0);    
	fclose($fp2);//close file

	$filename3 = "D:\LicentaClientApp\Assets\EmailRegister.txt";    
	$fp3 = fopen($filename3, "r+");//open file in read mode    
	$emailRegister = fread($fp3, filesize($filename3));//read file 
	ftruncate($fp3, 0);    
	fclose($fp3);//close file

	$filename4 = "D:\LicentaClientApp\Assets\PasswordRegister.txt";    
	$fp4 = fopen($filename4, "r+");//open file in read mode    
	$passwordRegister = fread($fp4, filesize($filename4));//read file 
	ftruncate($fp4, 0);    
	fclose($fp4);//close file

	$filename5 = "D:\LicentaClientApp\Assets\ConfirmPasswordRegister.txt";    
	$fp5 = fopen($filename5, "r+");//open file in read mode    
	$confirmPasswordRegister = fread($fp5, filesize($filename5));//read file 
	ftruncate($fp5, 0);    
	fclose($fp5);//close file

	echo $nameRegister . " " . $usernameRegister . " " . $emailRegister . " " . $passwordRegister . " " . $confirmPasswordRegister ;

	if($conn -> connect_error){
		die("connection failed: ". $conn->connect_error);
	}

	$duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE username= '$usernameRegister' OR email ='$emailRegister'");
	if(mysqli_num_rows($duplicate) > 0)
	{
		echo
		"<script> alert('Username or Email has already taken!'); </script>";
		
	}
	else
	{
		if($passwordRegister == $confirmPasswordRegister)
		{
			
			$query = "INSERT INTO tb_user VALUES('','$nameRegister','$usernameRegister','$emailRegister','$passwordRegister')";
			mysqli_query($conn,$query);
			echo
			"Registration Succesful";
		}
		else
		{
			echo
			"Password don't match!');";
			
		}
	}