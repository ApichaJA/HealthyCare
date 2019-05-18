<?php
include 'ConnectDatabase.php';

$strSQL = "SELECT * FROM food WHERE Name = '".mysqli_real_escape_string($conn,$_POST['Name'])."'";
		
		$objQuery = mysqli_query($conn,$strSQL);
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		if(!$objResult)
		{
			header("location:");

		}

		else{
					header("location:indexadd.php");

				}

	session_write_close();


mysqli_close($conn);
	?>
