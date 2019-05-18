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
                    <span class="sr-only">Toggle navigation</span> เมนู <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="IndexThaiUser.php">HealthyCare</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">เกี่ยวกับ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">บริการ</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#Product">รายละเอียด</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">ติดต่อ</a>
                    </li>
                    <li>
                                                <a data-toggle="dropdown" class="dropdown-toggle" style="text-decoration:none">
																									<?php echo $objResult["Name"];?>
			                                    <span class="caret"></span>
			                            </a>
			                                <ul class="dropdown-menu">
																					<li><a href="EditProfiles.php">แก้ไขข้อมูลส่วนตัว</a></li>
			                                          <li><a href="LogoutEng.php">ล็อกเอ้าท์</a></li>

                                </ul>
                    </div>

                    </li>
                </ul>
        </div>

    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Healthy Care</h1>
                <hr>
                <p>เราจะดูแลสุขภาพของคุณ จะออกกำลังกาย กิน และการนอนหลับ เช่นเดียวกับคุณ ดูแลคนที่คุณรัก</p>
                <a href="#about" class="page-scroll btn btn-default btn-xl sr-button">แนะนำแอพพลิเคชั่น!</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">เรามีสิ่งที่คุณต้องการ!</h2>
                    <hr class="light">
                    <p class="text-faded">คนที่คุณดูแลการรับประทานอาหาร เรื่องหัวใจ การเต้นของหัวใจ แอพพลิเคชั่นของเราจะดูแลสุขภาพของคุณ คุณมีตัวเลือกมากมายสำหรับการดูแลสุขภาพของคุณและคนที่คุณรัก</p>
                </div>
            </div>
        </div>
            <div class="SlideImage"></div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">การบริการเพื่อคุณ
</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-soccer-ball-o text-primary sr-icons"></i>
                        <h3>การออกกำลังกาย
</h3>
                        <p class="text-muted">ดูแลการออกกำลังกายและการเดินของคุณ</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-balance-scale text-primary sr-icons"></i><!birthday-cake>
                        <h3>อาหาร</h3>
                        <p class="text-muted">ดูแลการกินของคุณอย่างใกล้ชิด</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-neuter sr-icons"></i>
                        <h3>ผู้สูงอายุ</h3>
                        <p class="text-muted">คุณสามารถดูแลผู้สูงอายุของคุณได้อย่างใกล้ชิด</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-moon-o text-primary sr-icons"></i>
                        <h3>นอนหลับ</h3>
                        <p class="text-muted">เราจะดูแลการนอนหลับของคุณว่าพอหรือไม่</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="Product">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    รายละเอียด
                                </div>
                                <div class="project-name">
                                    Healthy Care
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>ดาวน์โหลดฟรี!</h2>
                <a href="#About" class="btn btn-default btn-xl sr-button">โหลดตอนนี้!</a>
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">ติดต่อ</h2>
                    <hr class="primary">
                    <p>เราพร้อมที่จะฟังทุกข้อเสนอแนะ หากพบว่าแอพพลิเคชั่นมีข้อผิดพลาดโปรดติดต่อ</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-support fa-3x sr-contact"></i>
                    <p>SupportHC@tooklife.com</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">HealtyhCare@foryourlife.com</a></p>
                </div>
            </div>
        </div>
    </section>


    <script src="vendor/jquery/jquery.min.js"></script>


    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>


    <script src="js/creative.min.js"></script>

</body>

</html>
