<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TradeFin</title>
	   
     <!-- Theme CSS -->
     <link rel="icon" type="image/png" href="img/favicon.png">
     <link href="public/bundle.min.css" rel="stylesheet">

</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="background-image: url(./img/sprite.png)"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="welcome-page.php">Welcome</a>
                    </li>
                    <li>
                        <a href="#">Register as an investor</a>
                    </li>
                    <li>
                        <a href="#">Register as a business </a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <!--<li>
                        <a href="#contact">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container fullwidth-header">
            <div class="intro-text">
                <div class="intro-lead-in">Supply Chain Finance Marketplace </div>
                <div class="intro-heading">and E-Invoicing Platform</div>
               
                    
              
                <a href="#video" class="page-scroll btn btn-xl">Learn More</a>
            </div>
        </div>
    </header>


     <section id="video" class="text-center">
         <div class="imgRounded"></div>
         <div class="imgRounded_img"></div>
               
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-video">TradeFin is a supply chain finance marketplace where Suppliers get paid early, corporations improve their sales and profitability and financiers make attractive returns with low risk</p>
                    <a class="btn btn-xl text-video__buttonOpen launch-modal" data-toggle="modal" data-target=".bs-example-modal-lg"> watch the video</a>
                </div>
            </div>
        </div>
    </section>
    
        <div class="modal fade bs-example-modal-lg" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-video">
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="video_play" width="80%" hight="800px" controls>
									<source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.ogv" type='video/ogg'>
									<source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.mp4" type='video/mp4'>
									<!-- <source src="video/TradeFin_Explainer_Rupee_Ver_FULLRES.mov"> -->
									</video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div





 
