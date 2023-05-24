<?php 

	session_start();
	$conn = mysqli_connect("localhost","root","","reglog");


	$username = $_POST["username"];
	$tip = $_POST["tip"];
	$descriere = $_POST["descriere"];
	$judet=$_POST["judet"];
	$oras = $_POST["oras"];
	$data= date("Y/m/d");
	$timp = date("h:i");

	$query = "INSERT INTO anunturibeneficiari VALUES('','$username','$tip','$descriere','$judet','$oras','$data','$timp')";
	mysqli_query($conn,$query);
	echo
			"Succes";
