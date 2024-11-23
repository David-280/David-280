<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Montana | Gallery </title>
    <meta name="description" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .obj {
            margin-right: 100px;
            margin-left: 100px;
        }

        @media (max-width:768px) {
            .obj {
                margin-left: 15px;
                margin-right: 15px;
            }
        }

        #sidebar {
            position: absolute;
            top: 0;
            left: -250px;
            right: 0;
            width: 250px;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            transition: left 0.3s ease;
            padding: 20px;
            z-index: 1000;
        }

        #sidebar.active {
            left: 0;
        }

        #sidebar .close-btn {
            margin-left: 200px;
            color: white;
            text-align: center;
            font-size: 30px;
            cursor: pointer;
            border-radius: 5px;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li {
            margin: 15px 0;
        }

        #sidebar ul li a {
            color: white;
            text-decoration: none;
        }

        #toggleSidebar {
            display: none;
            position: absolute;
            top: 20px;
            right: 20px;
            color: white;
            font-size: 25px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1001;
        }

        @media (max-width: 768px) {
            #toggleSidebar {
                display: block;
            }
        }
    </style>
</head>

<body>
    <a id="toggleSidebar" class="uo"><i class="fa fa-bars"></i></a>
    <div id="sidebar">
        <div class="close-btn" id="closeSidebar">&times;</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a class="active" href="gallery.php">Gallery</a>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div class="socail_links">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-facebook-square"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="book_btn d-none d-lg-block">
                                    <a href="rooms.php">Book A Room</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="bradcam_area breadcam_bg_3">
        <h3>Recent Galleries</h3>
    </div>
    <div class="section-top-border obj">
        <h3>Photos From Our Environment</h3>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="img/elements/g1.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/elements/g2.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/elements/g3.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/elements/g4.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="img/elements/g5.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/elements/g6.png" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g6.png);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/elements/g7.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="img/elements/g8.jpg" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(img/elements/g8.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title"> address </h3>
                            <p class="footer_text"> Ambassador Anjoye Foundation <br> Otukpo, Benue State, Nigeria</p>
                            <a href="#" class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title"> Reservation </h3>
                            <p class="footer_text">+234 913 684 7643<br> officialdakeyed@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title"> Team Members </h3>
                            <ul>
                                <li><a href="#">David Ogugor</a></li>
                                <li><a href="#">Andrew Otokpa</a></li>
                                <li><a href="#">Ejeh Victor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title"> Newsletter </h3>
                            <form action="https://formspree.io/f/mnnqzzln" class="newsletter_form" method="POST">
                                <input type="text" name="email" placeholder="Enter your mail" required>
                                <button type="submit">Sign Up</button>
                            </form>
                            <p class="newsletter_text">Subscribe newsletter to get updates</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right"> Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved |Group_2_Hackathon_Project</a>
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/nav.js"></script>
</body>

</html>