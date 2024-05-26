<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web App Landing Page Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        #link {
            color: white;
        }
    </style>
</head>

<body>
    <header class="continer-fluid ">
        <div class="header-top">
            <div class="container">
                <div class="row col-det">
                    <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    rupeshpancha7@gmail.com
                                    <span>|</span></li>
                               
                            </ul>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="ulright">
                            <li>
                              
                                <span>|</span>
                            </li>
                            <li>
                                <i class="fas fa-user"></i>
                                <a href="systemuser/index.php" id="link">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-md-3 logo">
                        <img src="assets/images/logo.jpg" alt="">
                    </div>
                    <div class="col-md-9 nav-col">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="gallary.html">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="process.html">Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="blog.html">Blog</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact US</a>
                                        </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-success  bounceInUp"> <a id="link" href="form/index.php">Book Blood </a></div>
                            <div class="btn btn-success  bounceInUp"> <a id="link" href="systemuser/choose.php">Donate Blood </a> </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, <br>
                            aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis <br>
                            sed sagittis at, sagittis quis neque. Praesent.</p>

                        <div class=" vbh">

                            <div class="btn btn-danger  bounceInUp"><a id="link" href="form/index.php">Book Blood </div>
                            <div class="btn btn-success  bounceInUp"> <a id="link" href="systemuser/choose.php">Donate Blood </a> </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

    
    
    
    <h2>Blood Stock In Blood Bank</h2>
    <div class="big-box">
        <!-- <div class="left-table1">
            <div class="table1">
                <div class="row1">
                    <?php
                    // Database connection
                    // require 'conn.php';

                    // // Query to fetch donor data
                    // $sql = "SELECT f_name, l_name, bloodgroup FROM donor";
                    // $result = $conn->query($sql);

                    // if ($result->num_rows > 0) {
                    //     echo "<div class='table1'>";
                    //     echo "<div class='row1 header1'>";
                    //     echo "<div class='box'>Name</div>";
                    //     echo "<div class='box'>Age</div>";
                    //     echo "<div class='box'>Occupation</div>";
                    //     echo "</div>";

                    //     while ($row = $result->fetch_assoc()) {
                    //         echo "<div class='row1'>";
                    //         echo "<div class='box'>" . $row["f_name"] ." ". $row["l_name"]. "</div>";
                    //         echo "<div class='box'>" . $row["l_name"] . "</div>";
                    //         echo "<div class='box'>" . $row["bloodgroup"] . "</div>";
                    //         echo "</div>";
                    //     }

                    //     echo "</div>"; // Close table1
                    // } else {
                    //     echo "No records found";
                    // }

                    // $conn->close();
                    ?>


                </div>
            </div>
        </div> -->

        <div class="right-table1">
            <div class="table1">
                <?php
                // Database connection
                require 'conn.php';

                // Query to fetch product data
                $sql = "SELECT bloodgroup, COUNT(*) AS count FROM register_donor GROUP BY bloodgroup";
            $sqll = "SELECT (SELECT COUNT(bloodgroup) FROM `register_donor` WHERE bloodgroup='o') 
                - (SELECT COUNT(bloodgroup) FROM `register_patient` WHERE bloodgroup='o') AS ct;
                     ";
            $result = $conn->query($sql);
            $resultt = $conn->query($sqll);

            if ($result->num_rows > 0 && $resultt->num_rows > 0) {
                echo "<div class='table1'>";
                    echo "<div class='row1 header1 green'>";
                    echo "<div class='box'>Blood Group</div>";
                    echo "<div class='box'>Stock</div>";
                    // echo "<div class='box'>Quantity</div>";
                    echo "</div>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='row1'>";
                        echo "<div class='box'>" . $row["bloodgroup"] . "</div>";
                        echo "<div class='box'>" . $row["count"] . "</div>";
                        // echo "<div class='box'>" . $row["bloodgroup"] . "</div>";
                        echo "</div>";
                    }

                    echo "</div>"; // Close table1
                } else {
                    echo "No records found";
                }

                $conn->close();
                ?>

            </div>

        </div>
    </div>
    
    <div class="col-md-9 nav-col">

    </div>

    <!--*************** About Us Starts Here ***************-->




    <!-- ################# Gallery Start Here #######################--->





    <!-- ################# Donation Process Start Here #######################--->






    <!--################### Our Blog Starts Here #######################--->






    <!--*************** Footer  Starts Here *************** -->

    <footer id="contact" class="container-fluid">
        <div class="container">

            <div class="row content-ro">
                <div class="col-lg-4 col-md-12 footer-contact">
                    <h2>Contact Informatins</h2>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="detail">
                            <p>Bhaktapur,Bagmati<br>Nepal</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="detail">
                            <p>rupeshpancha7@gmail.com <br>rupeshpancha7@gmail.com</p>
                        </div>
                    </div>
                    <div class="address-row">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="detail">
                            <p>+977 9861082539 <br> +977 9861082539</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 footer-links">
                    <div class="row no-margin mt-2">
                        <h2>Quick Links</h2>
                        <ul>
                            <li>Home</li>
                            <li>About Us</li>
                            <li>Contacts</li>
                            <li>Process</li>
                            <li>Gallery</li>
                            <li>Blog</li>

                        </ul>
                    </div>
                    <!-- <div class="row no-margin mt-1">
                        <h2 class="m-t-2">More Products</h2>
                        <ul>
                            <li>Forum PHP Script</li>
                            <li>Edu Smart</li>
                            <li>Smart Event</li>
                            <li>Smart School</li>


                        </ul>
                    </div> -->

                </div>
                <!-- <div class="col-lg-4 col-md-12 footer-form">
                    <div class="form-card">
                        <div class="form-title">
                            <h4>Quick Message</h4>
                        </div>
                        <div class="form-body">
                            <input type="text" placeholder="Enter Name" class="form-control">
                            <input type="text" placeholder="Enter Mobile no" class="form-control">
                            <input type="text" placeholder="Enter Email Address" class="form-control">
                            <input type="text" placeholder="Your Message" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">Send Request</button>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="footer-copy">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <p>Copyright © <a href="https://www.smarteyeapps.com">Smarteyeapps.com</a> | All right reserved.</p>
                    </div>
                    <div class="col-lg-4 col-md-6 socila-link">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li><a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>

</html>