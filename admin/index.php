<?php
session_start();

if (isset($_SESSION['user'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="Mosaddek">
            <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
            <link rel="shortcut icon" href="img/favicon.ico">

            <title>Saroj Enterprise</title>

            <!-- Bootstrap core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/bootstrap-reset.css" rel="stylesheet">
            <!--external css-->
            <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
            <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
            <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
            <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
            <link rel="stylesheet" type="text/css" href="css/gallery.css" />
            <!--right slidebar-->
            <link href="css/slidebars.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <script type="text/javascript" src="fancybox/jquery-latest.min.js"></script>

            <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
            <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

            <script>
                (function($)
                {
                    $(document).ready(function() {

                        $('.various').fancybox({
                            width: '80%',
                            height: 'auto',
                            autoSize: false,
                            closeClick: false,
                            openEffect: 'elastic',
                            openSpeed: 300,
                            closeEffect: 'elastic',
                            closeSpeed: 300,
                            fitToView: true,
                            preload: true
                        });

                    });
                })(jQuery);
            </script>

            <link href="css/style.css" rel="stylesheet">
            <link href="css/style-responsive.css" rel="stylesheet" />



            <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
            <!--[if lt IE 9]>
              <script src="js/html5shiv.js"></script>
              <script src="js/respond.min.js"></script>
            <![endif]-->
        </head>

        <body>

            <section>
                <!--header start-->
                <div style="float:left;">
                    <header class="header white-bg">
                        <!--logo start-->
                        <div style="float:left;">
                            <a href="index.php" class="logo"><span></span></a>
                            <img src="img/logo.png" style="width: 250px; height:70px;" title="Saroj Enterprise" alt="Saroj Enterprise" />
                        </div>
                        <!--logo end-->

                        <div class="top-nav ">
                            <!--search & user info start-->
                            <ul class="nav pull-right top-menu">
                                <!-- user login dropdown start-->
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                        <img alt="" src="img/<?php echo $_SESSION['photo']; ?>" style="height: 30px; width: 30px;">
                                        <span class="username"><?php echo $_SESSION['name']; ?></span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul style="height:50px; width:100px;" class="dropdown-menu extended logout">
                                        <li style="height:50px; width:100px;"><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                                    </ul>
                                </li>
                                <!-- user login dropdown end -->
                            </ul>
                            <!--search & user info end-->
                        </div>

                    </header>
                </div>
                <!--header end-->
                <!--sidebar start-->
                <aside>
                    <div id="sidebar" style="float:left;" class="nav-collapse">
                        <!-- sidebar menu start-->
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a class="active" href="index.php?p=home">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                             <li>
                                <a class="active" href="index.php?p=Show_godown">
                                    <i class="fa fa-mobile"></i>
                                    <span>Godown Entry</span>
                                </a>
                            </li>

                             <li>
                                <a class="active" href="index.php?p=Show_grade">
                                    <i class="fa fa-mobile"></i>
                                    <span>Grade Entry</span>
                                </a>
                            </li>

                            <li>
                                <a class="active" href="index.php?p=Show_stock">
                                    <i class="fa fa-mobile"></i>
                                    <span>Stock List</span>
                                </a>
                            </li>

                          <li>
                                <a class="active" href="index.php?p=show_pricelist">
                                    <i class="fa fa-mobile"></i>
                                    <span>PRICE LIST </span>
                                </a>
                            </li>

                            <li>
                                <a class="active" href="index.php?p=show_inquiry">
                                    <i class="fa fa-mobile"></i>
                                    <span>View Inquiry</span>
                                </a>
                            </li>

                            <li>
                                <a class="active" href="index.php?p=show_order">
                                    <i class="fa fa-mobile"></i>
                                    <span>View Orders</span>
                                </a>
                            </li>
                        <!--<li>
                                <a class="active" href="index.php?p=Show_category">
                                    <i class="fa fa-mobile"></i>
                                    <span>Category</span>
                                </a>
                            </li>

                            <li>
                                <a class="active" href="index.php?p=show_product">
                                    <i class="fa fa-mobile"></i>
                                    <span>Product</span>
                                </a>
                            </li>

                            <li>
                                <a class="active" href="index.php?p=show_gallery">
                                    <i class="fa fa-mobile"></i>
                                    <span>Gallery</span>
                                </a>
                            </li> -->

                            <li>
                                <a class="active" href="index.php?p=show_contact">
                                    <i class="fa fa-mobile"></i>
                                    <span>Contact</span>
                                </a>
                            </li>

                        </ul>
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                
                <!--sidebar end-->
                <!--main content start-->
                <section id="main-content">
                    <section class="wrapper">
                        <!--state overview start-->

                        <?php
                        error_reporting(0);
                        if (file_exists($_GET['p'] . '.php') && $_GET['p']) {
                            include ($_GET['p'] . '.php');
                        }
                        else
                        {
                            include './home.php';
                        }
                        ?>


                    </section>
                </section>
                <!--main content end-->

                <!-- Right Slidebar start -->

                <!-- Right Slidebar end -->

                <!--footer start-->
                
                <!--footer end-->
            </section>

            <!-- js placed at the end of the document so the pages load faster -->
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
            <script src="js/jquery.scrollTo.min.js"></script>
            <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
            <script src="js/jquery.sparkline.js" type="text/javascript"></script>
            <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
            <script src="js/owl.carousel.js" ></script>
            <script src="js/jquery.customSelect.min.js" ></script>
            <script src="js/respond.min.js" ></script>
            <script src="assets/fancybox/source/jquery.fancybox.js"></script>


            <!--right slidebar-->
            <script src="js/slidebars.min.js"></script>

            <!--common script for all pages-->
            <script src="js/common-scripts.js"></script>

            <script src="js/modernizr.custom.js"></script>
            <script src="js/toucheffects.js"></script>

            <!--script for this page-->
            <script src="js/sparkline-chart.js"></script>
            <script src="js/easy-pie-chart.js"></script>
            <script src="js/count.js"></script>

            <script>

                //owl carousel

                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        navigation: true,
                        slideSpeed: 300,
                        paginationSpeed: 400,
                        singleItem: true,
                        autoPlay: true

                    });
                });

                //custom select box

                $(function() {
                    $('select.styled').customSelect();
                });

            </script>
            <script type="text/javascript">
                $(function() {
                    //    fancybox
                    jQuery(".fancybox").fancybox();
                });

            </script>

        </body>

        <!-- Mirrored from thevectorlab.net/flatlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jan 2015 10:38:49 GMT -->
    </html>

    <?php
} else {
    header("location:login.php");
}
?>