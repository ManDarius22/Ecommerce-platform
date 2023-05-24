<?php
	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");

	$name = $_POST["name"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirmpassword=$_POST["confirmpassword"];


	if($conn -> connect_error){
		die("connection failed: ". $conn->connect_error);
	}

	$duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE username= '$username' OR email ='$email'");
	if(mysqli_num_rows($duplicate) > 0)
	{
		echo
		"<script> alert('Username or Email has already taken!'); </script>";
		
	}
	else
	{
		if($password == $confirmpassword)
		{
			
			$query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
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

?>