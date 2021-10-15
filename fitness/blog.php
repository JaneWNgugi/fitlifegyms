<?php
session_start();
include("connect.php");
if ($_SESSION["log"] == true) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <title>Platinum Gym And Fitness</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/aos.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="css/tooplate-gymso-style.css">

    </head>

    <body style="background-color:grey;" data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">

                <a class="navbar-brand" href="index.php">Platinum Gym & Fitness</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link smoothScroll">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="store.php" class="nav-link smoothScroll">Store</a>
                        </li>
                        <li class="nav-item">
                            <a href="account.php" class="nav-link smoothScroll">Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link smoothScroll">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="checkout.php" class="nav-link smoothScroll "><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>


                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link smoothScroll">logout</a>
                        </li>




                    </ul>


                </div>

            </div>
        </nav>


        <!--blog start -->
        <section id="blog" style="width:auto;margin:10px" class="new-product-area " data-aos="fade-up" data-aos-delay="700">
            <div class="container">
                <!-- Section tittle -->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="row">

                    <h1 style="color:red">Blog</h1>

                </div>
                <div class="container">
                    <!-- Section tittle -->

                    <h5 style="text-align:center;color:red;"> : <?php
                                                            } else {
                                                                header("location:login.php");
                                                            }
                                                                ?>

                </div>
                <div class="row">
                    <br>
                    <br>
                    <?php $query = "SELECT * FROM `blog` ";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) { ?>
                        <div class="col-sm-4">
                            <div class="card" data-aos="fade-up" data-aos-delay="700" style="width:370px;margin:10px">
                                <img style=" width: auto;"> <?php echo $row['photo']; ?>/>
                                <div class="card-body">
                                    <h3 class="card-title" style="color:red">
                                        <?php echo $row['title']; ?></h3>
                                    <h4 class="card-text" style="font-size:20px;"><?php echo $row['preview']; ?></h4>


                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            </div>
        </section>





        <!--blog end -->
        <footer style="background-color:white;" class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2021 Platinum Gym & Fitness Co.


                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="https://vymaps.com/KE/Platinum-Fitness-Park-1380393108684100/">platinumgym&fitness@gmail.co.ke</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>

                </div>
            </div>
        </footer>


        <!-- SCRIPTS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/custom.js"></script>

    </body>

    </html>