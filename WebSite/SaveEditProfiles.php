<?php

	include 'ConnectDatabase.php';

	if($_POST["Password"] != $_POST["ConPassword"])
	{
		header("location:EditProfilesWrong.php");
		exit();
	}
	elseif($_POST["Name"] == $_POST[""])
	{
		header("location:EditProfilesWrongName.php");
		exit();
	}
	$strSQL = "UPDATE UserLogin SET Password = '".trim($_POST['Password'])."'
	,Name = '".trim($_POST['Name'])."' WHERE Email = '".$_SESSION["Email"]."' ";
	$objQuery = mysqli_query($conn,$strSQL);

	echo "Save Completed!<br>";

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
