<?php
	require 'config.php';

	if(isset($_GET['destinatar']))
	{
		$idDEST=$_GET['destinatar'];
	}

	if(isset($_POST['sndmesaj'])){
		$user=$idDEST;
		$mesaj=$_POST['mesaj'];

		$user= mysqli_real_escape_string($conn,$user);
		$mesaj= mysqli_real_escape_string($conn,$mesaj);

		$id2= $_SESSION["id"];
		$connDB=mysqli_select_db($conn,'reglog');
		$result= mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id2");
		$row = mysqli_fetch_array($result);
		$expeditor = $row['username'];
		$dataTrimitere= date("Y/m/d");

	
		$query = "INSERT INTO mesajeuseri VALUES('','$user','$mesaj','$expeditor','$dataTrimitere')";
		mysqli_query($conn,$query);
		echo
			"<script> alert('$expeditor'); </script>";
		header("Location: profile.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="chatREMAKECSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div class="header">
			<form method="POST">
			<h1><?php echo $idDEST; ?></h1>
			</form>
		</div>

		<div class="body">
			<?php
					

					$id2= $_SESSION["id"];
					$result= mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id2");
					$row = $result->fetch_assoc();
					$userconn = $row['username'];


					$userconn = $row['username'];
					$rows= mysqli_query($conn, "SELECT * FROM mesajeuseri WHERE username='$userconn' AND expeditor='$idDEST'");
					$expeditorArray = array();
					while ($row = mysqli_fetch_assoc($rows)) {
						$expeditorArray[]=$row['id'] . "*" . $row['mesajtext'];
					}

					
					$rows2= mysqli_query($conn, "SELECT * FROM mesajeuseri WHERE username='$idDEST' AND expeditor='$userconn'");
					$destinatarArray = array();
					while ($row2 = mysqli_fetch_assoc($rows2)) {
						$destinatarArray[]=$row2['id'] ."*". $row2['mesajtext'];
					}
					

					$count=0;
					$countExpeditor=0;
					$countDestinatar=0;


					$countTarget = count($expeditorArray) + count($destinatarArray);
					
					while($count<$countTarget){

						if($countExpeditor < count($expeditorArray) && $countDestinatar < count($destinatarArray))
							{
								if(intval(substr($expeditorArray[$countExpeditor],0,2))< intval(substr($destinatarArray[$countDestinatar],0,2))){
								?>

									<p class="message">
									<?php
										 echo substr($expeditorArray[$countExpeditor],3); 
										 $countExpeditor++;
									?>
								</p>

								<?php 
								}	
								else {
									?>
									<p class="message user_message">
									<?php
										 echo substr($destinatarArray[$countDestinatar],3); 
										 $countDestinatar++;
									?>
								</p>

								<?php 
								}	
							 }
						else {
							if($countExpeditor >= count($expeditorArray)){
							?>
									<p class="message user_message">
									<?php
										 echo substr($destinatarArray[$countDestinatar],3); 
										 $countDestinatar++;
									?>
									</p>

								<?php 
							}

							else if($countDestinatar >= count($destinatarArray)){
							?>
									<p class="message">
									<?php
										 echo substr($expeditorArray[$countExpeditor],3); 
										 $countExpeditor++;
									?>
									</p>

								<?php 
							}
						}  
						$count++;
					}
					?>




		</div>

		<div class="footer">
			<form method="POST">
				<input type="text" name="mesaj">
				<button name="sndmesaj"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</form>
		</div>
	</div>

</body>
</html>