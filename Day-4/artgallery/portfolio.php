<!doctype html>
<!--
	Photogenic by FreeHTML5.co
	URL: https://freehtml5.co
-->
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Photogenic - Free Portfolio Bootstrap Template</title>
</head>

<body>

   <?php include 'menu.php';?>

<br/>
</br>

    <div class="container-fluid fh5co-portfolio" id="portfolio">
        <div class="container">
            <h2>OUR PORTFOLIO</h2>
            <p> These are the photos clicked by photographers.</p>
            <h3>FILTER BY:</h3>
            <div class="portfolio-tab portfolioFilter">
                <ul>
                    <li><a href="#" data-filter="*" class="active">ALL</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    
                </ul>
            </div>

            <div class="row">

                <div class="portfolioContainer">

                    <div class="gallary building nature green">
                        <img src="images/img1.png" alt="">
                        

                    </div>
                    <div class="gallary center-img wedding">
                        <img src="images/img2.png" class="half-height" alt="">
                        
                    </div>

                    <div class="gallary building">

                        <img src="images/img4.png" alt="">
                       
                    </div>
                    <div class="gallary center-img landscape nature">
                        <img src="images/img3.png" class="half-height" alt="">
                        
                    </div>
                    <div class="gallary">
                        <img src="images/img5.png" alt="">
                        
                    </div>

                    <div class="gallary center-img landscape">
                        <img src="images/img6.png" alt="">
                       
                    </div>


                    <div class="gallary building nature">
                        <img src="images/img4.png" alt="">
                        <div class="card-img-overlay">
                            

                           
                        </div>
                    </div>

                </div>
            </div>

            <div class="row portfolioFilter">
                <ul class="indicators">
                    <li><a href="#" data-filter=".landscape" class="active"></a>
                    </li>
                    <li><a href="#" data-filter=".green"></a>
                    </li>
                    <li><a href="#" data-filter=".building"></a>
                    </li>
                    <li><a href="#" data-filter=".wedding"></a>
                    </li>
                    <li><a href="#" data-filter=".nature"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
   
    <?php include 'footer.php'; ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="owl-carousel/owl.carousel.min.js"></script>
    <script src="js/isotope-docs.min.js?6"></script>
    <script src="js/main.js"></script>
</body>

</html>