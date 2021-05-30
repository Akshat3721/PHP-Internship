<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Greeno</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!--contact -->

<br/>
<br/>
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     
                  </div>
               </div>
            </div>

 
             <!-- section -->
    <div id="contact" class="section layout_padding">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6 padding_left_0">
                    <div class="full">
                        <img class="float-left" src="images/car.jfif" height="3000" width="2000" alt="#" />
                    </div>
                </div>

               <div class="col-md-6">
                <div class="heading">
                        <h2> <strong class="theme_blue">Contact Us</strong></h2>
                    </div>
                    <div class="full margin_top_20">
                        <form>
                        <div class="row">
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Your Name" type="text" required="">
                            </div>
                            <div class="col-sm-12">
                               <input class="form-control" placeholder="Email" type="Email" required="">
                            </div>
                            <div class="col-sm-12">
                                <input class="form-control" placeholder="Phone" type="text" required="">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control textarea" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <button class="main_bt">Send</button>
                    </form>
                    </div>   
                    
                </div>
                
            </div>
        </div>
    </div>
    <!-- end section -->
 <?php include 'footer.php';?>     
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>