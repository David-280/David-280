

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana | Rooms</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .search-bar-container {
            margin: 20px 0;
            text-align: center;
            position: relative; 
        }

        .search-bar-container input {
            width: 50%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-bar-container button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .search-suggestions {
            position: absolute;
            width: 50%; 
            margin-top: 10px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 999;
            left: 46%; 
            transform: translateX(-50%); 
        }

        .search-suggestions div {
            padding: 10px;
            cursor: pointer;
        }

        .search-suggestions div:hover {
            background-color: #f1f1f1;
        }
        .money{
            color:blue;
        }
        #sidebar {
        position: absolute;
        top: 0;
        left: -250px;
        right:0;
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
        margin-left:200px;
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
        font-size:25px;
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
<a id="toggleSidebar" class="uo" ><i class="fa fa-bars"></i></a>
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
                                        <li><a  class="active"  href="rooms.php">Rooms</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="gallery.php">Gallery</a>
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
                                    <a class="popup-with-form" href="#test-form">Book A Room</a>
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

    <div class="bradcam_area breadcam_bg_1">
        <h3>Rooms on site </h3>
    </div>
    <div class="offers_area padding_top">
        <div class="container">           
            <div class="search-bar-container">
                <input type="text" id="roomSearch" placeholder="Search for a room" onkeyup="searchRooms()">
                 <button onclick="searchRooms()">Search</button>
                  <div id="suggestions" class="search-suggestions">
                  </div>
            </div>
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row" id="roomList">

            
                <?php
                include('fetch_rooms.php');
                if (isset($rooms) && count($rooms) > 0) {
                    foreach ($rooms as $room) {
                ?>
                    <div class="col-xl-4 col-md-4 mb-5 room-item" data-room-name="<?php echo strtolower($room['room_name']); ?>">
                        <div class="single_offers">
                            <div class="about_thumb">
                                <img src="<?php echo $room['image_url']; ?>" alt="Room Image">
                            </div>
                            <h3><?php echo $room['room_name']; ?></h3>
                            <ul>
                                <li><?php echo $room['room_type']; ?></li>
                                <li class="money"><?php echo "Price: ₦" . number_format($room['price_per_night'], 2); ?> per night</li>
                                <li><?php echo $room['description']; ?></li>
                                <li><?php echo $room['availability_status']; ?></li>
                            </ul>
                            <a href="room_details.php?room_id=<?php echo $room['id']; ?>" class="book_now">Book Now</a>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
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
                                        <p>Do you Prefer To Chat With Our Customer Service on Whatsapp </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                        <a href="https://wa.me/+2347070031845?text=Hi%20i%20am%20an%20interested%20Customer%20and%20i%20Need%20a%20Room
                                        " class="mobile_no"><i class="fa fa-whatsapp"></i>
                                        +234 707 003 1845</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" >
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                address
                            </h3>
                            <p class="footer_text"> Ambassador Anjoye Foundation <br>
                               Otukpo, Benue State, Nigeria</p>
                            <a href="#" class="line-button">Get Direction</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservation
                            </h3>
                            <p class="footer_text">+234 913 684 7643<br>
                                officialdakeyed@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Team Members
                            </h3>
                            <ul>
                                <li><a href="#">David Ogugor</a></li>
                                <li><a href="#">Andrew Otokpa</a></li>
                                <li><a href="#">Ejeh Victor</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Newsletter
                            </h3>
                            <form  action="https://formspree.io/f/mnnqzzln" class="newsletter_form" method="POST">
                                <input type="text" name="email" placeholder="Enter your mail" required>
                                <button type="submit" >Sign Up</button>
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
                        <p class="copy_right">
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rightsreserved | Group_2_Hackathon_Project

                        </p>
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
    <script>
        // Array of room names for suggestions (you can fetch this dynamically)
        const rooms = <?php echo json_encode(array_map(function($room) { return strtolower($room['room_name']); }, $rooms)); ?>;
        
        function searchRooms() {
            const input = document.getElementById('roomSearch').value.toLowerCase();
            const suggestionsBox = document.getElementById('suggestions');
            const roomList = document.getElementById('roomList');
            
            // Filter rooms based on search input
            const filteredRooms = rooms.filter(room => room.includes(input));
            
            // Show suggestions
            suggestionsBox.innerHTML = '';
            if (input.length > 0 && filteredRooms.length > 0) {
                filteredRooms.forEach(room => {
                    const div = document.createElement('div');
                    div.textContent = room;
                    div.onclick = () => fillSearchInput(room);
                    suggestionsBox.appendChild(div);
                });
            }
            
            // Show rooms that match the search term
            const roomItems = roomList.getElementsByClassName('room-item');
            for (let i = 0; i < roomItems.length; i++) {
                const roomName = roomItems[i].getAttribute('data-room-name');
                if (roomName.includes(input)) {
                    roomItems[i].style.display = '';
                } else {
                    roomItems[i].style.display = 'none';
                }
            }
        }

        function fillSearchInput(roomName) {
            document.getElementById('roomSearch').value = roomName;
            searchRooms();
        }
    </script>
</body>
</html>