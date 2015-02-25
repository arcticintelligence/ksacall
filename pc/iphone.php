<?php
error_reporting(0);
?>

<?php
    $file_data = file_get_contents('formdata.txt', FILE_USE_INCLUDE_PATH);
    $file_data_array = explode("|=|", $file_data); //create array separate by new line
    //print_r($file_data_array); die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Asia</title>
    <meta name="description" content="cyber asia" />
    <!-- templatemo 411 dragonfruit -->
    <meta name="author" content="templatemo">
    <!-- Favicon-->
    <link rel="shortcut icon" href="./favicon.png" />
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Camera -->
    <link href="css/camera.css" rel="stylesheet">
    <!-- Template  -->
    <link href="css/templatemo_style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<br>
<div id="templatemo_mobile_menu">
    <ul class="nav nav-pills nav-stacked">
        <!--<li><a href="#templatemo_banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>-->
        <li><a class="external-link" href="index.php"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; Home</a></li>
        <li><a class="external-link" href="http://www.cyberasiabd.net:3030/crm/cdr/"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Customer Login</a></li>
        <li><a class="external-link" href="http://www.cyberasiabd.net:3030/crm/"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Reseller Login</a></li>
    </ul>
</div>
<div class="container_wapper">
    <div id="templatemo_banner_menu">
        <div class="container-fluid">
            <div class="col-xs-4 templatemo_logo">
                <a rel="nofollow" href="#">
                    <!--                	<img src="images/logo.png" id="logo_img" alt="" title="Ksacall" />-->
                    <h1 id="logo_text">Cyber<span>Asia</span></h1>
                </a>
            </div>
            <div class="col-sm-8 hidden-xs">
                <ul class="nav nav-justified">
                    <!--<li><a href="#templatemo_banner_slide">Home</a></li>-->
                    <li><a rel="nofollow" class="external-link" href="index.php">Home</a></li>
                    <li><a class="external-link" rel="nofollow" href="http://www.cyberasiabd.net:3030/crm/cdr/">Customer Login</a></li>
                    <li><a class="external-link" rel="nofollow" href="http://www.cyberasiabd.net:3030/crm/">Reseller Login</a></li>
                </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="index.php" class="external-link" id="mobile_menu"><span class="glyphicon glyphicon-home"></span></a>
            </div>
        </div>
    </div>
</div>

<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        
        <div class="hidden-sm hidden-md hidden-lg">
            <h2>&nbsp;</h2>
        <div class="col-xs-5 col-xs-offset-1 dialer-login">
    <ul class="nav nav-justified">
        <li><a rel="nofollow" class="external-link" href="http://www.cyberasiabd.net:3030/crm/cdr/">Customer Login</a></li>
     </ul>
</div>
<div class="col-xs-5 col-xs-offset-1 dialer-login">
    <ul class="nav nav-justified">
        <li><a rel="nofollow" class="external-link" href="http://www.cyberasiabd.net:3030/crm/">Reseller Login</a></li>
     </ul>
</div>
            
        </div>
        
        

        
        <h2>&nbsp;</h2>
        <h2>Iphone</h2>
        <div id="templatemo_dialer" class="templatemo-dialer">
            <div class="content">
                <ul>
                    <li>
                        <a class="external-link" href="<?php echo $file_data_array[5] ?>">
                        <div class="dialer-item-wrapper">
                            <img src="images/iphone.png">
                        Itel Mobile [OC : 26523]
                        </div>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        

        

    </div>
</div><!--templatemo_about-->


<div id="templatemo_footer">
    <div>
        <p id="footer">Copyright &copy; 2014 cyberasia <!-- Credit: www.templatemo.com --></p>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->
<script src="js/templatemo_script.js"></script>
<!-- 
Dragonfruit Template 
http://www.templatemo.com/preview/templatemo_411_dragonfruit 
-->
</body>
</html>