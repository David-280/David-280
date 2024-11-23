<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana | About Us</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
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

        .obj {
            margin-right: 150px;
            margin-left: 150px;
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
                                        <li><a href="gallery.php">Gallery</a>
                                        <li><a class="active" href="about.php">About Us</a></li>
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
    <div class="bradcam_area breadcam_bg">
        <h3>About Montana Resorts</h3>
    </div>
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>About Us</span>
                            <h3>A Luxuries Hotel <br> with Nature</h3>
                        </div>
                        <p>At Montana, we offer a blend of comfort and luxury in the heart of Otukpo, Benue State. Our team is dedicated to providing you with a memorable stay, whether for business or leisure. Experience exceptional service and modern amenities designed to make you feel at home.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="img/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" mb-3 obj">
        <h3 class="mb-30">A Brief History of Montana Resorts</h3>
        <div class="row">
            <div class="col-lg-12">
                <blockquote class="generic-blockquote"> Founded in 1995, the Montana Resort began as a family-owned boutique hotel nestled in the heart of the vibrant coastal city of Otukpo. The vision was simple yet ambitious: to create a haven of luxury and tranquility for travelers seeking a blend of modern amenities and a touch of local culture. From its humble beginnings with just 20 elegantly designed rooms, the hotel quickly earned a reputation for its exceptional service and warm hospitality. Over the years, Montana Resorts Hotel expanded its offerings, adding a world-class spa, fine-dining restaurants, and conference facilities, all while preserving its signature charm. In 2010, the hotel underwent a major renovation to incorporate eco-friendly practices, including solar energy and water conservation systems, making it one of the pioneers of sustainable tourism in the region. Today,Montana Resorts boasts over 100 luxurious rooms and suites, catering to both leisure and business travelers. With its commitment to excellence and a legacy of over two decades, the hotel continues to provide unforgettable experiences, blending tradition with modern sophistication. Whether you're here for a relaxing getaway or a corporate retreat, the Montana Resorts promises a stay that feels like home—only better </blockquote>
            </div>
        </div>
    </div>
    <div class="section-top-border obj">
        <h3 class="mb-30">Who We Are!!</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="single-defination">
                    <h4 class="mb-20">Our Vision</h4>
                    <p>To be a globally recognized leader in hospitality, known for our unparalleled guest experiences, innovative services, and commitment to sustainability. We envision a future where Montana Resorts is the preferred destination for travelers seeking comfort, luxury, and authentic cultural connections. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-defination">
                    <h4 class="mb-20">Our Mission</h4>
                    <p> At Montana Resorts, our mission is to create exceptional experiences that blend comfort, luxury, and personalized service. We are dedicated to exceeding our guests' expectations by providing a welcoming atmosphere, world-class amenities, and heartfelt hospitality. </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-defination">
                    <h4 class="mb-20">Our Goals</h4>
                    <p> Our goal at Montana Resorts is to consistently deliver exceptional hospitality by creating a welcoming environment, exceeding guest expectations, and fostering a culture of excellence among our team. </p>
                </div>
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
</body>
<script src="js/nav.js"></script>
</html>