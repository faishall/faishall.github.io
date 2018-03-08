<?php  
// require_once 'db_connect.php';
error_reporting(0);
// $sumber = 'api.json';
// $konten = file_get_contents($sumber);
// $data = json_decode($konten, true);

$file = file_get_contents("http://faishal.com.preview.services/api/api_tampilan.php");
$data = json_decode($file, true);


if ($data['status'] == false) {
 echo "<center><h1>Error 404</h1></center>";
} else {

  ?>
  <!doctype html>
  <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
  <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
  <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
  <!--[if gt IE 8]><!-->
  <html class="no-js" lang="">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php print $data['profile']['nama'] ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>

  <body>
    <!-- Header Section -->
    <section class="banner" role="banner"> 
      <!-- Navigation Section -->
      <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="#"><?php print $data['profile']['nama'] ?></a>
          <nav class="navigation" role="navigation">
            <ul class="primary-nav">
              <li><a href="#introduction">About Me</a></li>
              <li><a href="#works">Skills Me</a></li>
              <li><a href="#contact">Contact Me</a></li>
            </ul>
          </nav>
          <a href="#" class="nav-toggle">Menu<span></span></a> </div>
        </header>
        <!-- Navigation Section --> 
        <!-- Banner Section -->
        <div class="container">
          <div class="col-md-7 banner-inner-wrapper">
            <div class="banner-text">
              <h1>I'm <?php print $data['profile']['nama'] ?>.</h1>
              <p><?php print $data['profile']['alamat'] ?></p>
              <a href="#contact" class="btn">Contact Me</a> </div>
              <!-- banner text --> 
            </div>
          </div>
          <!-- Banner Section --> 
        </section>
        <!-- Header Section --> 
        <!-- Intro Section -->
        <section id="introduction" class="section introduction">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="intro-content">
                  <h1><?php print $data['profile']['masukan'] ?></h1>
                </div>
              </div>
              <div class="col-md-5 col-sm-6">
                <div class="intro-content">
                  <p><?php print $data['profile']['selogan'] ?></p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="intro-content">
                  <h4>my expertise</h4>
                  <ul>
                    <?php   
                    foreach($data['skil'] as $daa)
                    {
                      print '
                      <li> - '.$daa['skill'].'</li>
                      ';} 
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Intro Section --> 

          <!-- work section -->
          <section id="works" class="works section no-padding">
            <div class="container-fluid">
              <div class="row no-gutter">

                <?php   
                foreach($data['skil'] as $daa)
                {
                  print '
                  <div class="col-lg-2 col-md-4 col-sm-4 work"><a href="images/'.$daa['foto'].'" class="work-box"> <img src="images/'.$daa['foto'].'" alt="">
                    <div class="overlay">
                      <div class="overlay-caption">
                        <p><i class="fa fa-search-plus fa-2x"></i></p>
                      </div>
                    </div>
                  </a>
                </div>';  
              }
              ?>
            </div>
          </section>
          <!-- work section --> 

          <!-- footer section -->
          <footer id="contact" class="footer">
            <div class="container">
              <div class="col-md-4">
                <h4>Contact</h4>
                <p> Collins Street West Victoria 8007 Australia.<br>
                  Call: <a href="https://api.whatsapp.com/send?phone=6285236436460&text=Siapa%20?">WhatsApp</a> <br>
                  Email : <a href="mailto:<?php print $data['profile']['email'] ?>"> <?php print $data['profile']['email'] ?></a></p>
                </div>
                <div class="col-md-3">
                  <h4>Social presense</h4>
                  <ul class="footer-share">
                    <li><a href="https://www.facebook.com/<?php print $data['media']['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/<?php print $data['media']['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/u/1/<?php print $data['media']['google'] ?>"><i class="fa fa-google"></i></a></li>
                  </ul>
                </div>
                <div class="col-md-5">
                <p>© <?php echo date("Y");?> All rights reserved. All Rights Reserved<br>
                    Made with <i class="fa fa-heart pulse"></i> by <a href="#">Faishal</a></p>
                  </div>
                </div>
              </footer>
              <!-- footer section --> 

              <!-- JS FILES --> 
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
              <script src="js/bootstrap.min.js"></script> 
              <script src="js/jquery.fancybox.pack.js"></script> 
              <script src="js/retina.min.js"></script> 
              <script src="js/modernizr.js"></script> 
              <script src="js/main.js"></script>
            </body>
            </html>

            <?php }?>
