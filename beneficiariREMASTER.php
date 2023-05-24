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

if(isset($_POST["submit"]))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cui = $_POST['cui'];
	$tip = $_POST['tip'];
	$adresa = $_POST['adresa'];
	$query = "INSERT INTO beneficiari VALUES('','$email','$name','$cui','$tip','$adresa')";
	mysqli_query($conn,$query);

}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beneficiari </title>
	<link rel="stylesheet" type="text/css" href="benCSSREMASTER.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

		<br>
		<br>
		<br>

		<div class="contentViz">

			<h1><b> Dorești să faci parte din <span>programul</span> nostru?</b></h1>
			<br>
			
			<p class="par"> Consideri că organizația din care faci parte, fie ea un ONG, o instituție publică sau orice tip de unitate, ar putea beneficia de serviciile noastre în vederea îndeplinirii atribuților într-un mod mai facil decât îl fac în momentul de față? Vă așteptăm cu o aplicație pe care o puteți trimite prin formularul din dreapta iar în cel mai scurt timp o să fiți înștiințați cu privire la statusul aplicației de unul dintre angajații nostrii prin email. </p>
			<br>
			<center>
			<button class="cn" onclick="location.href='afisareanunturibeneficiari.php'" type="button"><b class="donatiiBTNText">Ajută</b></button>
			</center>
			<form method="post" enctype="multipart/form-data">
				<div class="form">
					<center>			
						<h2>Înregistrare instituției</h2><br>
						<input class="field" type="text" name="name" id="name" placeholder="Denumire institutie" required>
						<input class="field" type="email" name="email" id="email" placeholder="Introduceti un email valid" required>
						<input class="field" type="text" name="cui" id="cui" placeholder="CUI" required>
						<input class="field" type="text" name="tip" id="tip" placeholder="Tipul institutie" required>
						<input class="field" type="text" name="adresa" id="adresa" placeholder="Adresa completa" required>
						<br>
										
					<button class="btn" type="submit" name="submit" value="Upload">Trimite</button>
					</center>
				</div>
			</form>
		</div>
	


	</div>	

</body>
</html>