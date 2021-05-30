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
     
      <!--Gallery -->
      <div id="gallery" class="Gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  
               </div>
            </div>
         </div>
      </div>
<center> <h2>Gallery </h2> </center>
      <div class="container-fluid margin-r-l">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/1.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/1.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jfif" class="fancybox" rel="ligthbox">View</a>
                     </span>  
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/2.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/2.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/3.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/3.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/3.jfif" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/4.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/4.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/4.jfif" class="fancybox" rel="ligthbox">View</a>
                     </span> 
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/5.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/5.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/5.jfif" class="fancybox" rel="ligthbox">View</a>
                     </span> 
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/6.jfif" class="fancybox" rel="ligthbox">
                     <img  src="images/6.jfif" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/6.jfif" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
         </div>
      </div>
      <!-- end Gallery -->
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