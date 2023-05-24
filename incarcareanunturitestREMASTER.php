<?php
require 'config.php';

if(!empty($_SESSION["id"]))
{
	$id= $_SESSION["id"];
	$result = mysqli_query($conn,"SELECT * FROM `tb_user` WHERE `id`= $id");
	$row = mysqli_fetch_assoc($result);
}
else
{
	header("Location: login.php");
	
}



if(isset($_POST['submit']))
{
	$user=$row["username"];
	$descriere=$_POST['descriere'];
	$tip=$_POST['tip'];
	$judet=$_POST['judeteRom'];
	if($_FILES["image"]["error"]===4)
	{
		echo "<script>alert('Image does not exist!');</script>";
	}
	else
	{
		$fileName = $_FILES['image']['name'];
		$fileSize= $_FILES['image']['size'];
		$tmpName=$_FILES['image']['tmp_name'];

		$validImageExtension=['jpg','jpeg','png'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if(!in_array($imageExtension, $validImageExtension))
		{
			echo "<script>alert('Invalid Image extension!');</script>";
		}
		else if($fileSize > 1000000)
		{
			echo "<script>alert('Image size to large!');</script>";
		}
		else
		{
			$newImageName = uniqid().'.'.$imageExtension;
			move_uploaded_file($tmpName,'imgtest/' . $newImageName);
			$query = "INSERT INTO anunturidonatori VALUES('','$user','$descriere','$tip','$newImageName','$judet')";
			mysqli_query($conn,$query);
			echo 
			"<script>
				alert('Succesfuly added!');
				header(Location: afisareanunturitest.php);
			</script>";
		}

	}
}


?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="indexCSS.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="styleREMASTER.css"> --> 
	<link rel="stylesheet" type="text/css" href="incarcareCSSREMASTER.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Doneaza</title>
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
				<li><a href="logout.php">Logout</a></li>
				<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		
		<br>
		<br>
		<br>


		<div class="contentViz">
			<h1><b> Donează din <span>inimă</span></b></h1>

			<br>
			<p class="par">De câte ori ți s-a întâmplat să îți renovezi apartamentul de exemplu, sau pur și simplu să înlocuiești un obiect din viața cotidiană cu unul nou.<br> Situație care duce la simpla aruncare a obiectului vechi la gunoi. Ei bine ne dorim să îi ajutăm pe cei aflați în nevoie <br>așa că daca și tu ești într-o situație similară noi îți pune la dispoziție un loc în care poți să donezi bunul respectiv pentru a primi o noua sansă de utilizare în loc sa îl arunci. Dorim să oferim seriozitate asa că te rugăm să verifici totuși integritateta obiectul înainte de al oferii spre donație.</p>			
			<br>
			<center>
			<button class="cn" onclick="location.href='afisareanunturiDonatori.php'" type="button"><b class="donatiiBTNText">Donatii</b></button>
			</center>
			<form method="post" enctype="multipart/form-data">
				<div class="form">
					<center>
					<h2>Donează</h2>
					<textarea class="field" id="descriere" name="descriere" placeholder="Descrie obiectul donat"></textarea>	
					<br>
					<br>					
					
						<label class="textSimplu">Tipul donației:</label>
						
						<br>
						<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Financiara" id="financiara"><b> Financiara</b></label><br>
						<label for="mobilier" class="radio-inline"><input type="radio" name="tip" value="Mobilier" id="mobilier"><b> Mobilier</b></label><br>
						<label for="jucarii" class="radio-inline"><input type="radio" name="tip" value="Jucarii" id="jucarii"><b> Jucarii</b></label><br>
						<label for="haine" class="radio-inline"><input type="radio" name="tip" value="Haine" id="Haine"><b> Haine</b></label><br>
						<label for="altele" class="radio-inline"><input type="radio" name="tip" value="Altele" id="altele"><b> Altele</b></label><br>
						<br>
						
						<label for="image" class="textSimplu">Imagine: </label><br>
					
					<input type="file" name="image" id="image"value=""><br>
					
					<br>

					<label for="image" class="textSimplu">Alege județul: </label><br>

					
								<select name="judeteRom">
									<option value="" disabled selected>Alege</option>
									<option value="Alba">Alba</option>
									<option value="Arad">Arad</option>
									<option value="Arges">Arges</option>
									<option value="Bacau">Bacau</option>
									<option value="Bihor">Bihor</option>
									<option value="Bistrita">Bistrita-Nasaud</option>
									<option value="Botosani">Botosani</option>
									<option value="Brasov">Brasov</option>
									<option value="Braila">Braila</option>
									<option value="Buzau">Buzau</option>
									<option value="Caras-Severin">Caras-Severin</option>
									<option value="Calarasi">Calarasi</option>
									<option value="Cluj">Cluj</option>
									<option value="Constanta">Constanta</option>
									<option value="Covasna">Covasna</option>
									<option value="Dambovita">Dambovita</option>
									<option value="Dolj">Dolj</option>
									<option value="Galati">Galati</option>
									<option value="Giurgiu">Giurgiu</option>
									<option value="Gorj">Gorj</option>
									<option value="Harghita">Harghita</option>
									<option value="Hunedoara">Hunedoara</option>
									<option value="Ialomita">Ialomita</option>
									<option value="Iasi">Iasi</option>
									<option value="Ilfov">Ilfov</option>
									<option value="Maramures">Maramures</option>
									<option value="Mehedinti">Mehedinti</option>
									<option value="Mures">Mures</option>
									<option value="Neamt">Neamt</option>
									<option value="Olt">Olt</option>
									<option value="Prahova">Prahova</option>
									<option value="Satu Mare">Satu Mare</option>
									<option value="Salaj">Salaj</option>
									<option value="Sibiu">Sibiu</option>
									<option value="Suceava">Suceava</option>
									<option value="Teleorman">Teleorman</option>
									<option value="Timis">Timis</option>
									<option value="Tulcea">Tulcea</option>
									<option value="Vaslui">Vaslui</option>
									<option value="Valcea">Valcea</option>
									<option value="Vrancea">Vrancea</option>
								</select>

					<button class="btn" type="submit" name="submit" value="Upload">Upload</button>

					</center>
				</div>
			</form>
		</div>
	


	</div>	
	
</body>
</html>