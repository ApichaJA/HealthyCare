<?php
	include 'ConnectDatabase.php';

	if($_SESSION['Email'] == "")
	{
		header("location:Check.php");
		exit();
	}

	$strSQL = "SELECT * FROM UserLogin WHERE Email = '".$_SESSION['Email']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
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

            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">


    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/creative.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> MENU <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="Check.php">HealthyCare</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    </div>

                    </li>
                </ul>
        </div>

    </nav>

    <header>
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Edit Your Profile</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left"></h3>
                            		<p style="color:Red;">Please select your name</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="SaveEditProfiles.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Name</label>
			                        	<input type="text" name="Name" placeholder="Name..." class="form-Name form-control" id="Name" value="<?php echo $objResult["Name"];?>">
			                          </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="Password" placeholder="Password..." class="form-password form-control" id="Password" value="<?php echo $objResult["Password"];?>">
			                        </div>
                              <div class="form-group">
			                        	<label class="sr-only" for="form-password">ConPassword</label>
			                        	<input type="password" name="ConPassword" placeholder="Confirm Password..." class="form-Conpassword form-control" id="ConPassword" value="<?php echo $objResult["Password"];?>">
			                        </div>
			                        <button type="submit" class="btn">Save</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3></h3>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



 <script src="vendor/jquery/jquery.min.js"></script>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <script src="js/creative.min.js"></script>


</body>

</html>
