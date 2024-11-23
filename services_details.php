<?php

include('config.php');


if (isset($_GET['service_id'])) {
    $service_id = $_GET['service_id'];

 
    $sql = "SELECT * FROM service WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $service_id);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
      
        $service = $result->fetch_assoc();
    } else {
      
        echo "Service not found.";
        exit;
    }
} else {
    
    header('Location: services.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details - <?php echo $service['service_name']; ?></title>
    <style>
@import url("https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&display=swap");
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


body {
    font-family:'Raleway', sans-serif;
    background-color: #f4f4f4;
    font-weight:normal;
    color: #333;
    line-height: 1.6;
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
.service_details_area {
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

.service_image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.service_info {
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.service_info h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
}

.service_info p {
    margin-bottom: 10px;
    font-size: 16px;
}



.service_info h3 {
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


.book_now {
    background-color: #009DFF;
    color: #fff;
    padding: 15px 25px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.back_home_link {
    display: inline-block;
    margin-bottom: 10px;
    color: #007bff;
    font-size: 16px;
    text-decoration: none;
    font-weight: bold;
}

.back_home_link:hover {
    color: #0056b3;
    text-decoration: underline;
}

.book_now:hover {
    background-color: white;
    color:#009DFF ;
    outline:#009DFF;
}
.close {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }

@media screen and (max-width: 768px) {
    .col-lg-6 {
        width: 100%;
        margin-bottom: 20px;
    }

    .service_image img {
        max-width: 100%;
    }
}

@media screen and (max-width: 576px) {
    .service_info h2 {
        font-size: 20px;
    }

    .service_info p {
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

<div class="service_details_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                
                <a href="services.php" class="back_home_link">Back to Services</a>
                <div class="service_image">
                    <img src="<?php echo $service['image_url']; ?>" alt="Service Image" class="img-fluid">
                </div> <br>
                <div class="service_info">
                    <h2><?php echo $service['service_name']; ?></h2>
                    <p><strong>Description:</strong> <?php echo $service['description']; ?></p>
                    <p><strong>Price:</strong> ₦<?php echo number_format($service['cost'], 2); ?> per service</p>
                    <br>
                    <button class="estimate-btn" id="estimateBtn"  onclick="openModal()">Estimate Cost</button>
                </div>
            </div>
            <div class="col-lg-6">
                    <h3>Book This Service</h3>
                <form action="https://formspree.io/f/mnnqzzln" method="POST">
                    <input type="hidden" name="service_name" value="<?php echo $service['service_name']; ?>">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="booking_date">Booking Date:</label>
                        <input type="date" name="booking_date" required>
                    </div>
                    <div class="form-group">
                        <label for="no_of_services">Number of Services:</label>
                        <input type="number" name="no_of_services" min="1" required>
                    </div>
                    <input type="hidden" name="_subject" value="New Service Booking Request">
                    <input type="hidden" name="_redirect" value="https://yourwebsite.com/thank-you">
                    <button type="submit" class="book_now">Submit Booking</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="boy" id="child">
    <div class="modal-overlay" id="modalOverlay"></div>
        <div class="modal" id="estimateModal">
            <span class="close" onclick="closeModal()">&times;</span>
            <h4>Cost Estimator</h4>
            <label for="rooms">Amout  of Services Rendered:</label>
            <input type="number" id="rooms" placeholder="Enter Number of Services">
            <button id="calculateBtn">Calculate Total</button>
            <p id="totalCost" style="margin-top: 10px; font-weight: bold;"></p>
    </div>
</div>

<script>
    const estimateBtn = document.getElementById('estimateBtn');
    const modal = document.getElementById('estimateModal');
    const overlay = document.getElementById('modalOverlay');
    const calculateBtn = document.getElementById('calculateBtn');
    const roomsInput = document.getElementById('rooms');
    const totalCost = document.getElementById('totalCost');

    const costPerRoom = <?php echo $service['cost']; ?>;
    function openModal() {
        document.getElementById('child').style.display = 'flex';
    }
    function closeModal() {
        document.getElementById('child').style.display = 'none';
    }
    

    estimateBtn.addEventListener('click', () => {
        modal.classList.add('active');
        overlay.classList.add('active');
    });

    overlay.addEventListener('click', () => {
        modal.classList.remove('active');
        overlay.classList.remove('active');
        totalCost.textContent = '';
        roomsInput.value = '';
    });

   
    calculateBtn.addEventListener('click', () => {
        const rooms = parseInt(roomsInput.value);
        if (!isNaN(rooms) && rooms > 0) {
            const total = rooms * costPerRoom;
            totalCost.textContent = `Total Cost: ₦${total.toLocaleString()}`;
        } else {
            totalCost.textContent = 'Please enter a valid number of rooms.';
        }
    });
</script>
</body>
</html>
