<?php

require 'config.php';
if(!empty($_SESSION["id"]))
{
	$id= $_SESSION["id"];
	$result = mysqli_query($conn,"SELECT * FROM tb_user WHERE id= $id");
	$row = mysqli_fetch_assoc($result);
	$varaibleDisplay="Logout";
}
else
{
	//header("Location: login.php");
	$varaibleDisplay="Login";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- fontu quicksand -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home Page</title>
</head>
<body>
	<div class="banner">
		<div class="navbar">
			<img src="logo2.png" class="logo">
			<ul>			
				<li><a href="beneficiariREMASTER.php">Registration</a></li>
				<li><a href="incarcareanunturitestREMASTER.php">Doneaza</a></li>
				<li><a href="afisareanunturiDonatori.php">Donatii</a></li>
				<li><a href="afisareanunturibeneficiari.php">Ajuta</a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="logout.php"><p><?php echo $varaibleDisplay; ?></p></a></li>
				<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
			</ul>
		</div>

		<div class="content">
			<h1>Împreună suntem mai puternici</h1>
			<p>Încearcă să îi ajuți pe cei aflați în nevoie oricând
			ai ocazia.</p>
			<div>
				<button onclick="location.href='incarcareanunturitestREMASTER.php'" type="button"><span></span>Donează</button>
				<br>
				
				
			</div>
		</div>
	</div>

</body>
</html>