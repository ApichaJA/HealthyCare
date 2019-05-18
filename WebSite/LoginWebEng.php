<?php
include 'ConnectDatabase.php';

	$strSQL = "SELECT * FROM UserLogin WHERE Email = '".mysqli_real_escape_string($conn,$_POST['Email'])."'
		and Password = '".mysqli_real_escape_string($conn,$_POST['Password'])."' ";
		$objQuery = mysqli_query($conn,$strSQL);
		$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
		if(!$objResult)
		{
			header("location:LoginEngWrong.html");

		}

		else{

				$_SESSION["Email"] = $objResult["Email"];
				$_SESSION["Status"] = $objResult["Status"];

				session_write_close();

				if($_SESSION["Status"] == "Admin")
				{
					header("location:IndexAdmin.php");
				}
				else
				{
					header("location:IndexEngUser.php");

				}
	}
/*$strSQL = "UPDATE UserLogin SET LoginStatus = '1' , LastUpdate = NOW() WHERE Email = '".$objResult["Email"]."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$_SESSION["Email"] = $objResult['Email'];*/

	session_write_close();


mysqli_close($conn);
	?>
