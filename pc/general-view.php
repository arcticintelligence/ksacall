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
    <meta name="description" content="Cyber Asia" />
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
            <li><a class="external-link" href="#templatemo_about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; Dialers</a></li>
            <li><a class="external-link" href="http://www.cyberasiabd.net:3030/crm/cdr/"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Customer Login</a></li>
            <li><a class="external-link" href="http://www.cyberasiabd.net:3030/crm/"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Reseller Login</a></li>            
            <li><a href="#templatemo_contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contact</a></li>
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
                    <li><a href="#templatemo_about">Dialers</a></li>
                    <li><a class="external-link" rel="nofollow" href="http://www.cyberasiabd.net:3030/crm/cdr/">Customer Login</a></li>
                    <li><a class="external-link" rel="nofollow" href="http://www.cyberasiabd.net:3030/crm/">Reseller Login</a></li>
                    <li><a href="#templatemo_contact">Contact</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="index.php" id="mobile_menu"><span class="glyphicon glyphicon-home"></span></a>
            </div>
        </div>
    </div>
</div>
<div id="templatemo_about" class="container_wapper">
    <div class="container-fluid">
        
        <div class="hidden-sm hidden-md hidden-lg clearfix">
            <h2>&nbsp;</h2>
        <div class="col-xs-6 dialer-login">
    <ul class="nav nav-justified">
        <li><a rel="nofollow" class="external-link" href="http://www.cyberasiabd.net:3030/crm/cdr/">CDR Login</a></li>
     </ul>
</div>           
        <div class="col-xs-6 dialer-login">
    <ul class="nav nav-justified">
        <li><a rel="nofollow" class="external-link" href="http://www.cyberasiabd.net:3030/crm/">Reseller Login</a></li>
     </ul>
</div>           
        </div>
        
        <h3 class="clearfix centered">DIALERS</h3>
		<br>
        <div class="col-xs-6 col-sm-6 col-md-2 about_icon hidden-xs">
            <div class="imgwap mission">
                    <img class="dialer-img" src="images/phone-call-1.png"></div>
            <!--<h2>Customer</h2>-->
            <!--<p>Sed do eiusmod tempor incididunt ut labore et.</p>-->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 about_icon hidden-xs">
            <div class="imgwap product"><a class="external-link" href="<?php echo $file_data_array[1] ?>">
                    <img src="images/asus-laptop.png"></a></div>
            <h2>PC Dialer</h2>
            <p>[OC: 26523]</p>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 about_icon hidden-xs">
            <div class="imgwap testimonial"><a href="#templatemo_dialer"><img src="images/mobile-devices.png"></a></div>
            <h2>Mobile Dialer</h2>
            <!--<p>Dolore magna aliqua. Ut enim ad minim veniam.</p>-->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-2 about_icon hidden-xs">
            <div class="imgwap statistic">
                    <img class="dialer-img" src="images/phone-call.png"></div>
            <!--<h2>Reseller</h2>-->
            <!--<p>Aliqua. Ut enim ad minim veniam, quis nostrud aliqua.</p>-->
        </div>
        
        <div id="templatemo_dialer" class="templatemo-dialer">
            <div class="content">
                <ul>
                    <li>
                        <a class="external-link" href="nokia.html">
                        <div class="dialer-item-wrapper">
                            
                            <img src="images/nokia.png">
                            Nokia Dialer
                        </div></a>
                        
                    </li>
                    <li>
                        <a class="external-link" href="android.html">
                        <div class="dialer-item-wrapper">
                            
                        <img src="images/android.png">
                        Android Dialer
                        </div> </a>                       
                    </li>
                    <li>
                        <a class="external-link" href="iphone.html">
                        <div class="dialer-item-wrapper">
                            
                        <img src="images/iphone.png">
                        Iphone Dialer
                        </div></a>
                    </li>
                    <li>
                        <a class="external-link" href="blackberry.html">
                        <div class="dialer-item-wrapper">
                            
                        <img src="images/black.png">
                        Blackberry Dialer
                        </div></a>                      
                    </li>
                    <li>
                        <a class="external-link" href="windows.html">
                        <div class="dialer-item-wrapper">
                            
                        <img src="images/windows.png">
                        Windows Dialer
                        </div></a>                    
                    </li>
                </ul>
            </div>
        </div>
        

    </div>
</div><!--templatemo_about-->




<div id="templatemo_contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact</h1>
        
<!--        <div class="col-xs-12">
            <div id="templatemo_contact_map"></div>
        </div>-->
        
        
    <div class="col-md-4"> 
      <h2>Contact Info.</h2>
      <!--<p>Sed viverra nunc magna, quis placerat augue pellentesque quis. Sed nec pellentesque dolor. Aenean in lectus enim. Phasellus eu egestas libero. Vivamus ultrices ligula a dapibus lobortis.</p>-->
      <br>
      <p><strong>Email:</strong>-<br />
        <strong>Phone:</strong> 010-020-0340<br />
        <strong>Website:</strong> www.cyberasiabd.com<br />
        <strong>Address:</strong> 123 Thamine Street, Digital Estate, USA</p>
      <ul class="list-inline social-link">
        <li> <a href="#"><i class="fa fa-linkedin"></i></a> </li>
        <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
        <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
      </ul>
    </div>
        <form action="#" method="post" class="col-md-8">
            <div class="row">
                
        <div class="col-md-12"> 
          <h2>Send Enquiry</h2>
        </div>
                
        <div class="col-md-6"> 
          <p>Name</p>
          <input type="text" name="name" id="name" placeholder="Your Name" />
        </div>
                
        <div class="col-md-6"> 
          <p>Email</p>
          <input type="text" name="email" id="email" placeholder="Your Email" />
        </div>
                
        <div class="col-md-12"> 
          <p>Subject</p>
          <input type="text" name="subject" id="subject" placeholder="Subject" />
        </div>
                
        <div class="col-md-12"> 
          <p>Message</p>
          <textarea name="message" id="message"  placeholder="Write your message here..."></textarea>
        </div>
                <div class="col-xs-6 col-sm-3 col-md-offset-6">
                    <button type="submit">Send</button>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>
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
<!--<script src="js/templatemo_script.js"></script>-->
<!-- 
Dragonfruit Template 
http://www.templatemo.com/preview/templatemo_411_dragonfruit 
-->
</body>
</html>
