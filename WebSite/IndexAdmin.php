<?php
	include 'ConnectDatabase.php';

	$strSQL = "SELECT * FROM UserLogin WHERE Email = '".$_SESSION['Email']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	/*if($objResult["LoginStatus"] == "1")
		{
			header("location:index.php");
			exit();
		}
		else
		{

	$strSQL = "UPDATE UserLogin SET LoginStatus = '1' , LastUpdate = NOW() WHERE Email = '".$objResult["Email"]."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$_SESSION["Email"] = $objResult['Email'];
}*/

if($objResult["Email"] == "")
{
	header("location:index.php");
	exit();
}

	session_write_close();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HealthyCare</title>
    <link href="img/LOGO.png" rel="shortcut icon">


    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/creative.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="indexAdmin.php">HealthyCare</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="indexAdmin.html">EditUser</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="DeleteUserAdminOnly.php">DeleteUser</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="EditProfiles.php">EditProfile</a>
                    </li>
                    <li>

                        <a data-toggle="dropdown"
                            class="dropdown-toggle" style="text-decoration:none; color:white;">
                                            <?php echo $objResult["Name"];?>
                                    <span class="caret"></span>
                            </a>
                                <ul class="dropdown-menu">

                                          <li><a href="LogoutEng.php">Logout</a></li>

                                </ul>
                    </div>

                    </li>
                </ul>
        </div>

    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Welcome Admin</h1>
                <hr>
                <p>Admin Can Do anything
</p>


    <script src="vendor/jquery/jquery.min.js"></script>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <script src="js/creative.min.js"></script>

</body>

</html>
