<?php
require 'config.php';

if(isset($_GET['anuntID']))
{
		$idSters=$_GET['anuntID'];
		$query="DELETE FROM anunturidonatori WHERE id=$idSters";
		mysqli_query($conn,$query);
		echo
			"<script> Anuntul a fost sters cu succes! </script>";
		header("refresh:0;url=profile.php");
}

?>