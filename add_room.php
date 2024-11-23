
<?php

include('../config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_name = $_POST['room_name'];
    $room_type = $_POST['room_type'];
    $price_per_night = $_POST['price_per_night'];
    $availability_status = $_POST['availability_status'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    
    $sql = "INSERT INTO rooms (room_name, room_type, price_per_night, availability_status, description, image_url) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdsss", $room_name, $room_type, $price_per_night, $availability_status, $description,$image_url);

    if ($stmt->execute()) {
        echo "Room added successfully!";
        header("Location: ../rooms.php"); 
        exit;
    } else {
        echo "Error adding room: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Room</title>
    <style>
 
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
}


.form-container {
    max-width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}


.form-container h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}


label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #555;
}

input[type="text"], 
input[type="number"], 
select, 
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    color: #333;
}


button[type="submit"] {
    display: block;
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}


@media (max-width: 768px) {
    .form-container {
        padding: 15px;
    }

    input[type="text"], 
    input[type="number"], 
    select, 
    textarea {
        font-size: 13px;
    }

    button[type="submit"] {
        font-size: 14px;
    }
}

    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Add New Room</h2>
        <form action="" method="POST">
            <label for="image_url">Room Image Url:</label>
            <input type="text" id="image_url" name="image_url" required>

            <label for="room_name">Room Name:</label>
            <input type="text" id="room_name" name="room_name" required>

            <label for="room_type">Room Type:</label>
            <input type="text" id="room_type" name="room_type" required>

            <label for="price_per_night">Price Per Night:</label>
            <input type="number" id="price_per_night" name="price_per_night" step="0.01" required>

            <label for="availability_status">Availability Status:</label>
            <select id="availability_status" name="availability_status" required>
                <option <?php echo 'selected'; ?>>Available</option>
                <option <?php echo 'selected'; ?>>Unavailable</option>
            </select>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required></textarea>

            <button type="submit">Add Room</button>
        </form>
    </div>
</body>
</html>
