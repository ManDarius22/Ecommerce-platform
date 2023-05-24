<?php
//am putatu require de la linia 102 in caz ca se strica ceva
	require 'config.php';
	if(isset($_POST['favoritebtn']) && !empty($_SESSION['id'])){
		$starValue = "fa fa-star";
	}
	else
	{
		$starValue = "fa fa-star-o";
	}

	if(empty($_SESSION['id'])){
		$varaibleDisplay="Login";
	}
	else{
		$varaibleDisplay="Logout";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="youtubeCSS.css">
	<!-- fontu quicksand -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <title>Ajuta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body bgcolor="#DBF9FC">
		<div class="banner2">
		<div class="navbar">
			<img src="logo2.png" class="logo">
			<ul>
				<li><a href="beneficiariREMASTER.php">Registration</a></li>			
				<li><a href="incarcareanunturitestREMASTER.php">Doneaza</a></li>
				<li><a href="afisareanunturiDonatori.php">Donatii</a></li>
				<li><a href="afisareanunturibeneficiari.php">Ajuta</a></li>
				<li><a href="index.php">Home</a></li>
				<li><a href="logout.php"><?php echo $varaibleDisplay; ?></a></li>
				<li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	<center>
	<div class="col-md-3">
                <form action="" method="POST">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5><b>Filter</b> 
                                <button type="submit" class="btn btn-primary btn-sm float-end" name="submit">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                               
                            
                                
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6><b>Anunturile beneficiarilor</b></h6>
                            <hr>         
							<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Financiara" id="financiara"><b> Financiara</b></label> <br>
							<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Jucarii" id="financiara"><b> Jucarii</b></label> <br>
							<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Haine" id="financiara"><b> Haine</b></label> <br>
							<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Mobila" id="financiara"><b> Mobilier</b></label><br>
							<label for="financiara" class="radio-inline"><input type="radio" name="tip" value="Altele" id="financiara"><b> Altele</b></label><br>
							<br>
							<button type="submit" class="btn btn-primary" name="favoritebtn"><i style="color:#F6F640;" class="<?php echo $starValue; ?>" aria-hidden="true"></i> Favorite</button>
							<br>				
							<br>
							<button class="btn btn-danger" onClick="window.location.reload();">Remove filters</button><br><br>
							<h6><b>Sorteaza</b></h6>
							<button type="submit" class="btn btn-outline-info" name="normalGrid"><i class="fa fa-th" aria-hidden="true"></i></button>
							<button type="submit" class="btn btn-outline-info" name="gridLayout"><i class="fa fa-square" aria-hidden="true"></i></button>
							<br>
							<label><b>Alege un judet:</b></label>
							<br>
							<form method="POST">
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
							</form>
                        </div>
                    </div>
                </form>
    </div>
    
		<div class="container py-5">
			<div class="row mt-4">

								<?php 
									



												if(isset($_POST['favoritebtn']) && !empty($_SESSION['id'])){
													$userconn= $_SESSION["id"];
													$queryfav = "SELECT * FROM favoritebeneficiari WHERE userconectat='$userconn' ";
													$query_runfav = mysqli_query($conn,$queryfav);
													$check_datafav=mysqli_num_rows($query_runfav) > 0;
												 	
												 	if ($check_datafav > 0) {
												       
												        while ($row = mysqli_fetch_array($query_runfav)) {
													?>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['user']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																		<br>
																		<i class="fa fa-map-marker" aria-hidden="true"></i>
																		<b>Judet: </b>
																		<?php echo $row['oras']; ?>
																		<br>
																		<i class="fa fa-calendar" aria-hidden="true"></i>
																		<b>Data:</b>
																		<?php echo $row['data']; ?>
																	<br>
																		<a href="contact.php?contact=<?php echo $row["user"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favoritebeneficiari.php?delete=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:red;" class="fa fa-trash-o" aria-hidden="true"></i><b> Remove</b></a>
																	</p>
																</div>
															</div>
														</div>
														<?php
														}

													}
													else{
														echo "<script>alert('Nu aveti articole favorite!');</script>";
														$query = "SELECT * FROM anunturibeneficiari";
															$query_run = mysqli_query($conn,$query);
														
															while ($row = mysqli_fetch_array($query_run)) {
															?>
																<div class="col-md-4 py-3">
																	<div class="card">
																		<div class="card-body">
																			<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																			<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																			<p class="card-text">
																				<i class="fa fa-file-text" aria-hidden="true"></i>
																				<b>Descriere:</b>
																				<?php echo $row['descriere']; ?>
																				<br>
																				<i class="fa fa-map-marker" aria-hidden="true"></i>
																				<b>Judet:</b>
																				<?php echo $row['judet']; ?>
																				<br>
																				<i class="fa fa-calendar" aria-hidden="true"></i>
																				<b>Data:</b>
																				<?php echo $row['data']; ?>
																			<br>
																				<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																				<br>

																				<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																			</p>
																		</div>
																	</div>
																</div>
													<?php 
															}
													}							
													exit();
													
											}

												if (isset($_POST['submit']) && isset($_POST['judeteRom'])) {
												 	$str = $_POST['judeteRom'];
												 	$query2 = "SELECT * FROM anunturibeneficiari WHERE judet='$str' ";
													$query_run2 = mysqli_query($conn,$query2);
													$check_data2=mysqli_num_rows($query_run2) > 0;
												 	
												 	if ($check_data2 > 0) {
												       
												        while ($row = mysqli_fetch_array($query_run2)) {
													?>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																		<br>
																		<i class="fa fa-map-marker" aria-hidden="true"></i>
																		<b>Judet:</b>
																		<?php echo $row['judet']; ?>
																		<br>
																		<i class="fa fa-calendar" aria-hidden="true"></i>
																		<b>Data:</b>
																		<?php echo $row['data']; ?>
																	<br>
																		<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																	</p>
																</div>
															</div>
														</div>
													<?php 
													
													}
													}
													else
													{
														echo "<script>alert('Nu dispunem de acest tip de articole!');</script>";
														
													
															$query = "SELECT * FROM anunturibeneficiari";
															$query_run = mysqli_query($conn,$query);
														
															while ($row = mysqli_fetch_array($query_run)) {
															?>
																<div class="col-md-4 py-3">
																	<div class="card">
																		<div class="card-body">
																			<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																			<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																			<p class="card-text">
																				<i class="fa fa-file-text" aria-hidden="true"></i>
																				<b>Descriere:</b>
																				<?php echo $row['descriere']; ?>
																				<br>
																				<i class="fa fa-map-marker" aria-hidden="true"></i>
																				<b>Judet:</b>
																				<?php echo $row['judet']; ?>
																				<br>
																				<i class="fa fa-calendar" aria-hidden="true"></i>
																				<b>Data:</b>
																				<?php echo $row['data']; ?>
																			<br>
																				<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																				<br>

																				<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																			</p>
																		</div>
																	</div>
																</div>
													<?php 
															}
													}							
													exit();
												}

												if (isset($_POST['gridLayout']) && isset($_POST['judeteRom'])) {
												 	$str = $_POST['judeteRom'];
												 	$query2 = "SELECT * FROM anunturibeneficiari WHERE judet='$str' ";
													$query_run2 = mysqli_query($conn,$query2);
													$check_data2=mysqli_num_rows($query_run2) > 0;
												 	
												 	if ($check_data2 > 0) {
												       
												        while ($row = mysqli_fetch_array($query_run2)) {
													?>
													<center>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																		<br>
																		<i class="fa fa-map-marker" aria-hidden="true"></i>
																		<b>Judet:</b>
																		<?php echo $row['judet']; ?>
																		<br>
																		<i class="fa fa-calendar" aria-hidden="true"></i>
																		<b>Data:</b>
																		<?php echo $row['data']; ?>
																	<br>
																		<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																	</p>
																</div>
															</div>
														</div>
													</center>
													<?php 
													
													}
													}
													else
													{
														echo "<script>alert('Nu dispunem de acest tip de articole!');</script>";
														
													
															$query = "SELECT * FROM anunturibeneficiari";
															$query_run = mysqli_query($conn,$query);
														
															while ($row = mysqli_fetch_array($query_run)) {
															?>
																<div class="col-md-4 py-3">
																	<div class="card">
																		<div class="card-body">
																			<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																			<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																			<p class="card-text">
																				<i class="fa fa-file-text" aria-hidden="true"></i>
																				<b>Descriere:</b>
																				<?php echo $row['descriere']; ?>
																				<br>
																				<i class="fa fa-map-marker" aria-hidden="true"></i>
																				<b>Judet:</b>
																				<?php echo $row['judet']; ?>
																				<br>
																				<i class="fa fa-calendar" aria-hidden="true"></i>
																				<b>Data:</b>
																				<?php echo $row['data']; ?>
																			<br>
																				<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																				<br>

																				<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																			</p>
																		</div>
																	</div>
																</div>
													<?php 
															}
													}							
													exit();
												}
													

												if(isset($_POST['gridLayout']) && isset($_POST['tip'])){
													$str = $_POST['tip'];
												 	$query2 = "SELECT * FROM anunturibeneficiari WHERE tip='$str' ";
													$query_run2 = mysqli_query($conn,$query2);
													$check_data2=mysqli_num_rows($query_run2) > 0;
												 	
												 	if ($check_data2 > 0) {
												       
												        while ($row = mysqli_fetch_array($query_run2)) {
													?>
													<center>
															<div class="col-md-7 py-3">
																<div class="card">
																	<div class="card-body">
																		<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																		<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																		<p class="card-text">
																			<i class="fa fa-file-text" aria-hidden="true"></i>
																			<b>Descriere:</b>
																			<?php echo $row['descriere']; ?>
																			<br>
																			<i class="fa fa-map-marker" aria-hidden="true"></i>
																			<b>Judet:</b>
																			<?php echo $row['judet']; ?>
																			<br>
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																			<b>Data:</b>
																			<?php echo $row['data']; ?>
																		<br>
																			<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																			<br>

																			<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																		</p>
																	</div>
																</div>
															</div>
														</center>
													<?php 
													
													}
													}
													else
													{
														echo "<script>alert('Nu dispunem de acest tip de articole!');</script>";
														
													
															$query = "SELECT * FROM anunturibeneficiari";
															$query_run = mysqli_query($conn,$query);
														
															while ($row = mysqli_fetch_array($query_run)) {
															?>
																<center>
																<div class="col-md-4 py-3">
																	<div class="card">
																		<div class="card-body">
																			<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																			<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																			<p class="card-text">
																				<i class="fa fa-file-text" aria-hidden="true"></i>
																				<b>Descriere:</b>
																				<?php echo $row['descriere']; ?>
																				<br>
																				<i class="fa fa-map-marker" aria-hidden="true"></i>
																				<b>Judet:</b>
																				<?php echo $row['judet']; ?>
																				<br>
																				<i class="fa fa-calendar" aria-hidden="true"></i>
																				<b>Data:</b>
																				<?php echo $row['data']; ?>
																			<br>
																				<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																				<br>

																				<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																			</p>
																		</div>
																	</div>
																</div>
																</center>
													<?php 
															}
													}							
													exit();
												}

												if(isset($_POST['gridLayout'])){
													$query = "SELECT * FROM anunturibeneficiari";
													$query_run = mysqli_query($conn,$query);
													
													while ($row = mysqli_fetch_array($query_run)) {
													?>
													<center>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																	<br>
																	<i class="fa fa-map-marker" aria-hidden="true"></i>
																	<b>Judet:</b>
																		<?php echo $row['judet']; ?>
																		<br>
																		<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favorite.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																	</p>
																</div>
															</div>
														</div>
													</center>
													<?php 
													}
													exit();
												}


												if (isset($_POST['submit']) && isset($_POST['tip'])) {
												 	$str = $_POST['tip'];
												 	$query2 = "SELECT * FROM anunturibeneficiari WHERE tip='$str' ";
													$query_run2 = mysqli_query($conn,$query2);
													$check_data2=mysqli_num_rows($query_run2) > 0;
												 	
												 	if ($check_data2 > 0) {
												       
												        while ($row = mysqli_fetch_array($query_run2)) {
													?>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																		<br>
																		<i class="fa fa-map-marker" aria-hidden="true"></i>
																		<b>Judet:</b>
																		<?php echo $row['judet']; ?>
																		<br>
																		<i class="fa fa-calendar" aria-hidden="true"></i>
																		<b>Data:</b>
																		<?php echo $row['data']; ?>
																	<br>
																		<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																	</p>
																</div>
															</div>
														</div>
													<?php 
													
													}
													}
													else
													{
														echo "<script>alert('Nu dispunem de acest tip de articole!');</script>";
														
													
															$query = "SELECT * FROM anunturibeneficiari";
															$query_run = mysqli_query($conn,$query);
														
															while ($row = mysqli_fetch_array($query_run)) {
															?>
																<div class="col-md-4 py-3">
																	<div class="card">
																		<div class="card-body">
																			<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																			<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																			<p class="card-text">
																				<i class="fa fa-file-text" aria-hidden="true"></i>
																				<b>Descriere:</b>
																				<?php echo $row['descriere']; ?>
																				<br>
																				<i class="fa fa-map-marker" aria-hidden="true"></i>
																				<b>Judet:</b>
																				<?php echo $row['judet']; ?>
																				<br>
																				<i class="fa fa-calendar" aria-hidden="true"></i>
																				<b>Data:</b>
																				<?php echo $row['data']; ?>
																			<br>
																				<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																				<br>

																				<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																			</p>
																		</div>
																	</div>
																</div>
													<?php 
															}
													}							
													exit();
												}

												 else
												{	
													$query = "SELECT * FROM anunturibeneficiari";
													$query_run = mysqli_query($conn,$query);
													
													while ($row = mysqli_fetch_array($query_run)) {
													?>
														<div class="col-md-4 py-3">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $row['username']; ?></h4>
																	<h3 class="card-title"><?php echo $row['tip']; ?></h3>
																	<p class="card-text">
																		<i class="fa fa-file-text" aria-hidden="true"></i>
																		<b>Descriere:</b>
																		<?php echo $row['descriere']; ?>
																		<br>
																		<i class="fa fa-map-marker" aria-hidden="true"></i>
																		<b>Judet:</b>
																		<?php echo $row['judet']; ?>
																		<br>
																		<i class="fa fa-calendar" aria-hidden="true"></i>
																		<b>Data:</b>
																		<?php echo $row['data']; ?>
																	<br>
																		<a href="contact.php?contact=<?php echo $row["username"]; ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
																		<br>

																		<a href="favoritebeneficiari.php?favorit=<?php echo $row["id"];?>" style="text-decoration: none;"><i style="color:#F6F640;" class="fa fa-star" aria-hidden="true"></i><b>Add to favorite</b></a>
																	</p>
																</div>
															</div>
														</div>
													<?php 
													
													}
												}
												?>
												

							</div>
						</div>
                    </div>

	</center>



</body>
</html>
