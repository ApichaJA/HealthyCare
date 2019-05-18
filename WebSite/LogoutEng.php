<?php
session_start();

	require_once("ConnectDatabase.php");

	$strSQL = "UPDATE UserLogin SET LoginStatus = '0', LastUpdate = '0000-00-00 00:00:00' WHERE Email = '".$_SESSION["Email"]."' ";
	$query = mysqli_query($conn,$strSQL);

	session_destroy();
header("location:index.php");
?>
