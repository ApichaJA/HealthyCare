<?php
	include 'ConnectDatabase.php';

	$strEmail = $_GET["Email"];
	$strSQL = "DELETE FROM UserLogin
		WHERE Email = '".$strEmail."' ";
	$objQuery = mysqli_query($conn,$strSQL);

	echo "Delete Completed!<br>";

if ($conn->query($strSQL) === TRUE){

	if($_SESSION["Status"] == "Admin")
	{
		header("location:IndexAdmin.php");
	}
	else
	{
		header("location:IndexEngUser.php");
	}
} else {
		echo "Error" . $conn->error;
}
?>
