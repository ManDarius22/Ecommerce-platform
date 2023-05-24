<?php

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");



	$usernameemail = $_POST["usernameemail"];
	$securityCode = $_POST["securityCode"];
	$password= $_POST["password"];
	$usernameemail= mysqli_real_escape_string($conn,$usernameemail);
	$password= mysqli_real_escape_string($conn,$password);
	$result = mysqli_query($conn, "SELECT * FROM administratortable WHERE username = '$usernameemail' AND seccode = '$securityCode'");
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) > 0)
	{
		if($password == $row["password"])
		{
			echo "Welcome " . $usernameemail;
		}
		else
		{
			echo
			"<script> alert('Wrong password!'); </script>";
			
		}
		
	}
	else
	{
		echo
			"<script> alert('User not registered!'); </script>";
	}