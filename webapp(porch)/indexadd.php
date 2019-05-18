<?php
	include 'ConnectDatabase.php';

	$strSQL = "SELECT * FROM food WHERE Name = '".mysqli_real_escape_string($conn,$_POST['Name'])."'
		and Cal = '".mysqli_real_escape_string($conn,$_POST['Cal'])."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" style="height:100%;">

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

    <link href="css/offcanvas.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="css/creative.min.css" rel="stylesheet">


</head>

<body style="height:100%;">
    <div class="overlay"></div>
    <header>
        <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="offcanvas">
            <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse sidebar-offcanvas">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
        <div class="Text-menu">Menu</div>
       <form role="form" action="addfood.php" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Add</label>
			                        	<input type="text" name="Email" placeholder="Email..." class="form-username form-control" id="Email">
			                        </div>
			                        <button type="submit" class="btn">Sign in!</button>
			                    </form>
              <h1><?php echo $objResult["Name"];?></h1>
        <h1><?php echo $objResult["Cal"];?></h1>
    </header>
        
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/offcanvas.js"></script>
    <script type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/creative.min.js"></script>

</body>

</html>