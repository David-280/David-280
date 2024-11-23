<?php

include('config.php');


if (isset($_GET['room_id'])) {
    $room_id = $_GET['room_id'];

   
    $sql = "SELECT * FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($sql); $stmt->bind_param("i", $room_id);
$stmt->execute(); $result = $stmt->get_result(); if ($result->num_rows > 0) {
$room = $result->fetch_assoc(); } else { echo "Room not found."; exit; } } else
{ header('Location: rooms.php'); exit; } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Room Details - <?php echo $room['room_name']; ?></title>

        <style>
            @import url("https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&display=swap");
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "Raleway", sans-serif;
                background-color: #f4f4f4;
                font-weight: normal;
                color: #333;
                line-height: 1.6;
            }
            .back_home_link {
                display: inline-block;
                margin-bottom: 10px;
                color: #007bff;
                font-size: 16px;
                text-decoration: none;
                font-weight: bold;
            }
            .container {
                width: 90%;
                margin: auto;
            }
            .row {
                display: flex;
                justify-content: space-between;
            }
            .room_image img {
                width: 100%;
                height: auto;
            }
            .estimate-btn {
                background-color: #28a745;
                color: white;
                padding: 10px 20px;
                font-size: 16px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin-top: 20px;
                transition: background-color 0.3s;
            }

            .estimate-btn:hover {
                background-color: white;
                color: #28a745;
                outline: 1px solid #28a745;
            }

            .modal {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: rgba(255, 255, 255, 0.95);
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
                padding: 20px;
                border-radius: 8px;
                width: 80%;
                max-width: 400px;
                z-index: 1000;
            }

            .modal.active {
                display: block;
            }

            .modal h4 {
                margin-bottom: 15px;
                color: #444;
            }

            .modal input {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }

            .modal button {
                background-color: #007bff;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                width: 100%;
                margin-top: 10px;
            }

            .modal button:hover {
                background-color: white;
                color: #007bff;
                border: 1px solid #007bff;
            }

            .modal-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: 999;
            }

            .modal-overlay.active {
                display: block;
            }
            .back_home_link:hover {
                color: #0056b3;
                text-decoration: underline;
            }

            .room_details_area {
                padding: 60px 0;
                background-color: #fff;
            }

            .container {
                width: 90%;
                margin: 0 auto;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .col-lg-6 {
                width: 48%;
                padding: 10px;
            }

            .room_image img {
                width: 100%;
                height: auto;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .room_info {
                padding: 20px;
                background-color: #f9f9f9;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .room_info h2 {
                font-size: 24px;
                color: #333;
                margin-bottom: 15px;
            }

            .room_info p {
                margin-bottom: 10px;
                font-size: 16px;
            }

            .room_info strong {
                font-weight: bold;
            }

            .room_info h3 {
                font-size: 20px;
                color: #444;
                margin-top: 30px;
            }

            form {
                margin-top: 20px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                font-size: 16px;
                color: #444;
                display: block;
                margin-bottom: 8px;
            }

            .form-group input {
                width: 100%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
            }

            .form-group input:focus {
                border-color: #007bff;
                outline: none;
            }
            .close {
                float: right;
                font-size: 20px;
                cursor: pointer;
            }

            .book_now {
                background-color: #007bff;
                color: #fff;
                padding: 15px 25px;
                font-size: 16px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .book_now:hover {
                background-color: #0056b3;
            }

            @media screen and (max-width: 768px) {
                .col-lg-6 {
                    width: 100%;
                    margin-bottom: 20px;
                }

                .room_image img {
                    max-width: 100%;
                }
            }

            @media screen and (max-width: 576px) {
                .room_info h2 {
                    font-size: 20px;
                }

                .room_info p {
                    font-size: 14px;
                }

                .book_now {
                    width: 100%;
                    font-size: 18px;
                }
            }
        </style>
    </head>
    <body>
        <div class="room_details_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="rooms.php" class="back_home_link"
                            >Back to Rooms</a
                        >
                        <div class="room_image">
                            <img
                                src="<?php echo $room['image_url']; ?>"
                                alt="Room Image"
                                class="img-fluid"
                            />
                        </div>
                        <br />
                        <div class="room_info">
                            <h2><?php echo $room['room_name']; ?></h2>
                            <p>
                                <strong>Type:</strong>
                                <?php echo $room['room_type']; ?>
                            </p>
                            <p>
                                <strong>Description:</strong>
                                <?php echo $room['description']; ?>
                            </p>
                            <p>
                                <strong>Price:</strong>
                                ₦<?php echo number_format($room['price_per_night'], 2); ?>
                                per night
                            </p>
                            <p>
                                <strong>Status:</strong>
                                <?php echo $room['availability_status']; ?>
                            </p>
                            <button class="estimate-btn" onclick="openModal()">
                                Estimate Cost
                            </button>
                            <br />
                        </div>
                    </div>

                    <div class="col-lg-6 room_info">
                        <h3>Book This Room</h3>
                        <form
                            action="https://formspree.io/f/mnnqzzln"
                            method="POST"
                        >
                            <input
                                type="hidden"
                                name="room_name"
                                value="<?php echo $room['room_name']; ?>"
                            />
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" required />
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" required />
                            </div>
                            <div class="form-group">
                                <label for="booking_date">Booking Date:</label>
                                <input
                                    type="date"
                                    name="booking_date"
                                    required
                                />
                            </div>
                            <div class="form-group">
                                <label for="no_of_rooms"
                                    >Number of Rooms:</label
                                >
                                <input
                                    type="number"
                                    name="no_of_rooms"
                                    min="1"
                                    required
                                />
                            </div>
                            <input
                                type="hidden"
                                name="_subject"
                                value="New Room Booking Request"
                            />
                            <input
                                type="hidden"
                                name="_redirect"
                                value="https://yourwebsite.com/thank-you"
                            />
                            <button type="submit" class="book_now">
                                Submit Booking
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="costModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h3>Estimate Cost</h3>
                <div>
                    <label for="numRooms">Number of Rooms:</label>
                    <input
                        type="number"
                        id="numRooms"
                        min="1"
                        placeholder="Enter number of rooms"
                    />
                </div>
                <p>Total Cost: ₦<span id="totalCost">0</span></p>
            </div>
        </div>

        <script>
            const roomPrice = <?php echo $room['price_per_night']; ?>;

            function openModal() {
                document.getElementById('costModal').style.display = 'flex';
            }

            function closeModal() {
                document.getElementById('costModal').style.display = 'none';
            }

            document.getElementById('numRooms').addEventListener('input', function () {
                const numRooms = this.value;
                const totalCost = numRooms * roomPrice;
                document.getElementById('totalCost').textContent = totalCost.toLocaleString();
            });
        </script>
    </body>
</html>
