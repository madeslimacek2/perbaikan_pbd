<?php
session_start();
include "koneksi.php";

// Notif Error
$Err = "";
if(isset ($_GET ["Err"]) && !empty ($_GET ["Err"])){
	switch ($_GET ["Err"]){
		case 1:
			$Err = "Username dan Password Kosong";
		break;
		case 2:
			$Err = "Username Kosong";
		break;
		case 3:
			$Err = "Password Kosong";
		break;
		case 4:
			$Err = "Password salah";
		break;
		case 5:
			$Err = "Username atau Password salah";
		break;
		case 6:
			$Err = "Maaf, Terjadi Kesalahan";
		break;
	}
}

// Notif
$Notif = "";
if(isset ($_GET["Notif"]) && !empty ($_GET["Notif"])){
	switch($_GET["Notif"]){
		case 1:
			$Notif = "User berhasil dibuat, silahkan Login";
		break;
	}
}
?>


<!doctype html>
<html lang="en">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laman Login</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Canonical SEO -->
    <link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">
    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="../../../../s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg" />
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/google-roboto-300-700.css" rel="stylesheet" />
</head>



      <body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Aplikasi Project Akademik</a>
            </div>
        </div>
    </nav>
        <form action="vl_user.php" method="post">
          <div class="wrapper wrapper-full-page">
            <div class="full-page login-page" filter-color="black" data-image="assets/img/login.jpg">
                <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                                <form method="#" action="#">
                                    <div class="card card-login card-hidden">
                                        <div class="card-header text-center" data-background-color="rose">
                                            <h4 class="card-title">Login Page</h4>
                                            <div class="social-line">
                                                <a href="" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="category text-center">
			<center><font style="color:red;"><?php echo $Err ?></font></center>
			<center><font style="color:green;"><?php echo $Notif ?></font></center>
       </p>
                                        <div class="card-content">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="Username">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer text-center">
                                            <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container">
                        <nav class="pull-left">
                            <ul>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">

                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <p class="copyright pull-right">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://www.facebook.com/Made308">Made Slimacek</a>, Politeknik Negeri Lampung
                        </p>
                    </div>
                </footer>
            </div>
        </div>
</body>
</div>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>
<!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->

</html>