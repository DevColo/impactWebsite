
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Impact Homepage</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

        <!-- pe-7 Icon -->
        <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

        <!-- owl carousel css -->
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
        <link rel="stylesheet" type="text/css" href="css/owl.transitions.css">

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <style type="text/css">
            .mt-lg-0>p{
            font-size: 16px !important;
    margin-bottom: 25px;
         }
         .dot-left{
            padding: 3.5rem 2.25rem 3.25rem 0 !important;
            margin-right: 44px;
         }
         .dot-right{
            padding: 3.5rem 0 3.25rem 2.25rem !important;
            margin-left: 44px;
         }
         .red-dot{
             width:10px;
             height:10px;
             background:red;
             border-radius:5px;
             display:block;
         }
         .row>.col-md-8{
             padding-top:15px;
         }

            .col-lg-6>.card {
    margin-bottom: 0 !important;
        }
        h2>img{
            margin-right: 13px;
        }

        </style>
    </head>

    <body>
        <?php
           include('header.php');
        ?>
         <!-- home start -->
         <!-- home start -->
         <section class="bg-home bg-gradient" id="home" style="background:url(images/IMG1.PNG);background-size:cover;">
            <div class="container-fluid">
                <div class="row">
                <div class="card contact-form mb-lg-0">
                            <div class="custom-form p-5">
                                <div class="row">
                                        <div class="col-md-12">
                                            <form action="#">
                                                <div class="form-group">
                                                    <input type="email" class="form-control form" placeholder="username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form" placeholder="password">
                                                </div>
                                                <div class="title justify-content-center" style="display: flex;">
                                                    <button type="submit" class="link btn btn-danger btn-rounded" style="margin-right: 20px;">SUBMIT
                                                </button></div>
                                            </form>
                                        </div> <!-- end col -->
        
                                    </div>
                            </div>
                            <!-- end custom-form -->
                
                        </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="home-img mt-5 mt-lg-0">
                            <!-- <img src="images/home-img.png" alt="" class="img-fluid mx-auto d-block"> -->
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
            <!-- container-fluid end -->

        </section>
        <!-- home end -->

        <?php
           include('footer.php');
        ?>
        <!-- footer end -->

        <!-- Javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>

        <!-- owl-carousel -->
        <script src="js/owl.carousel.min.js"></script>

        <!-- custom js -->
        <script src="js/app.js"></script>
    </body>

</html>