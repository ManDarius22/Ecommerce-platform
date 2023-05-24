<?php

require 'config.php';
	if(empty($_SESSION["id"]))
	{
		header("Location: login.php");
	}
	else
	{
		$id= $_SESSION["id"];
		$result = mysqli_query($conn,"SELECT * FROM tb_user WHERE id= $id");
		$row = mysqli_fetch_assoc($result);
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="profileCSS.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Profile</title>
</head>
<body>
	
	<div class="container">
		
		<div class="profile-box">
			<a href="logout.php"><img src="imgprof/logoutbtn.png" class="logout" height=100px width="100px"></a>
			<a href="index.php"><img src="imgprof/house.png" class="home" height=100px width="100px"></a>
			<img src="imgprof/usericon.png" class="user" height=300px width="300px">
			<br>
			<br>
			<?php
				$id= $_SESSION["id"];
				$result= mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id");

				while($row= mysqli_fetch_array($result))
				{
					?>
						<?php $value1 = $row['username'] ?>
						<label>Welcome <b> <?php echo $value1; ?></b></label>
						<!-- literele din tabel se schimba de aici -->
						
					<?php
				}
				?>
				<br>
				<br>
				<center>
			<table>
						<thead>
							<th>Conversații</th>
							<th>Acțiuni</th>								
						</thead>
						<?php
							$id2= $_SESSION["id"];
							$result= mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id2");
							$row = $result->fetch_assoc();
							$userconn = $row['username'];
							$rows= mysqli_query($conn, "SELECT DISTINCT expeditor FROM mesajeuseri WHERE username='$userconn'  ");
							
						?>
					
						<?php foreach ($rows as $row): ?>
						<tr>
							<td><?php echo $row["expeditor"] ?></td>

							<td>
								<a href="chatREMAKE.php?destinatar=<?php echo $row["expeditor"]; ?>" style="text-decoration: none;color: inherit;"><i class="fa fa-comments" aria-hidden="true"></i></a>
							</td>
						</tr>
							
						<?php endforeach; ?>	
						
			</table>
			</center>
		</div>	

	</div>

	<br>
	<br>

	<center>
			<table class="anunturi">
					<?php
						$id2= $_SESSION["id"];
						$result= mysqli_query($conn, "SELECT * FROM tb_user WHERE id= $id2");
						$row = $result->fetch_assoc();
						$userconn = $row['username'];
						$rows= mysqli_query($conn, "SELECT * FROM anunturidonatori WHERE user='$userconn'  ");
						$check_datafav=mysqli_num_rows($rows) > 0;
												 	
						if ($check_datafav > 0) {
					?>

					<thead>
						<th>Anunțurile dumneavoastră</th>
						<th>Acțiuni</th>								
					</thead>
						
					<?php foreach ($rows as $row): ?>
						<tr>
							<td><?php echo $row["descriere"] ?></td>
							<td><a href="deleteAnunturiDonatori.php?anuntID=<?php echo $row["id"]; ?>" style="text-decoration: none;color: inherit;"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
						</tr>
								
					<?php endforeach; }?>	
								
			</table>
	</center>

</body>
</html>