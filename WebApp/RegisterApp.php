<?php
include 'ConnectDatabase.php';

	$strSQL = "SELECT * FROM UserLogin WHERE Email = '".mysqli_real_escape_string($conn,$_POST['Email'])."'
		and Password = '".mysqli_real_escape_string($conn,$_POST['Password'])."' ";
		$objQuery = mysqli_query($conn,$strSQL);
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		if(!$objResult)
		{
			header("location:SignWrong.html");
		else{
					header("location:HomeMyself.html");

				}
	}
	session_write_close();
mysqli_close($conn);
	?>
