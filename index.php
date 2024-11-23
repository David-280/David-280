<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .testimonial_area {
            padding: 80px 0;
            background: #f9f9f9;
        }

        .testimonial_thumb img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 15px;
        }

        .single_testimonial {
            padding: 30px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .single_testimonial h4 {
            font-size: 18px;
            font-weight: 600;
            margin: 10px 0;
            color: #333;
        }

        .single_testimonial p {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
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

        .uo {
            margin-left: 240px;
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
    <header class="header">
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav class="" id="navbar">
                                    <ul>
                                        <li><a class="active" href="index.php">Home</a></li>
                                        <li><a href="rooms.php">Rooms</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="gallery.php">Gallery</a>
                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href="contact.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 ">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block ">
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
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text text-center">
                                <h3>Montana Resort</h3>
                                <p>Unlock to enjoy the view of Nature</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <a href="about.php" class="line-button">Learn More</a>
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
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Our services</span>
                        <h3>What Makes Us Different</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/1.png" alt="">
                        </div>
                        <h3>Explicit Kichten <br> Services</h3>
                        <ul>
                            <li>Local And International Dishes</li>
                            <li>Trained Kichten staffs</li>
                            <li>Door to Door delivery</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/2.png" alt="">
                        </div>
                        <h3>Pool Access 24/7 <br>
                        </h3>
                        <ul>
                            <li>Clean and safe swimming Pools</li>
                            <li>Specailized trained Life Gaurd Personnels</li>
                            <li>Water Games Available</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/3.png" alt="">
                        </div>
                        <h3>Condusive Restaurants <br>
                        </h3>
                        <ul>
                            <li>Round Tables For friendly disccussion</li>
                            <li>Trained Waiters </li>
                            <li>Clean And Healthy Restaurants</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/4.png" alt="">
                        </div>
                        <h3>Natural LandScape Views <br>
                        </h3>
                        <ul>
                            <li>Natural LandScape Sitings</li>
                            <li>Beatiful LandScapes</li>
                            <li>Mountain Views</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/5.png" alt="">
                        </div>
                        <h3> Beautiful Gardens <br>
                        </h3>
                        <ul>
                            <li>Trained Gardeners</li>
                            <li>Rare Flower Species</li>
                            <li>Romantic Garden Sites for Weddings</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-5">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/6.png" alt="">
                        </div>
                        <h3>Pool Games <br>
                        </h3>
                        <ul>
                            <li>Access To 12 Different Pool Games </li>
                            <li>Adult and Children Pool Games</li>
                            <li>Life Gaurd Personnels</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Testimonials</span>
                        <h3>What Our Guests Say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_testimonial text-center">
                        <div class="testimonial_thumb">
                            <img src="img/comment/comment_1.png" alt="">
                        </div>
                        <h4>Hareez Hepzibah</h4>
                        <p>"Staying at Montana Resort was an unforgettable experience. The food, the service, and the atmosphere were all top-notch. Highly recommend!"</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_testimonial text-center">
                        <div class="testimonial_thumb">
                            <img src="img/comment/comment_2.png" alt="">
                        </div>
                        <h4>Jane Smith</h4>
                        <p>"The rooms are so cozy, and the staff made us feel right at home. I can't wait to come back for another vacation!"</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_testimonial text-center">
                        <div class="testimonial_thumb">
                            <img src="img/comment/comment_3.png" alt="">
                        </div>
                        <h4>Michael Johnson</h4>
                        <p>"Montana Resorts has an incredible view of nature and the best amenities you can imagine. Perfect for a getaway!"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="video_area video_bg overlay">
        <div class="video_area_inner text-center">
            <span>Montana Sea View</span>
            <h3>Relax and Enjoy your <br> Vacation </h3>
            <a href="img/elements/video.mp4" class="video_btn popup-video">
                <i class="fa fa-play"></i>
            </a>
        </div>
    </div>
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                            <span>Delicious Food</span>
                            <h3>We Serve Fresh and <br> Delicious Food</h3>
                        </div>
                        <p>At Montana Resorts, we believe that exceptional hospitality begins with extraordinary dining. Our hotels are proud to serve a wide array of delicious meals crafted by world-class chefs who blend creativity with the finest locally sourced ingredients. </p>
                        <a href="#" class="line-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                    <p>For Reservation 0r Query?</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="https://wa.me/+2347070031845?text=Hi%20i%20am%20an%20interested%20Customer%20and%20i%20Need%20a%20Room" class="mobile_no"><i class="fa fa-whatsapp"></i> +234 707 003 1845</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="js/nav.js"></script>
</body>

</html>