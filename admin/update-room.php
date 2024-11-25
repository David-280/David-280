<?php

include('../config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_id = $_POST['room_id'];
    $room_name = $_POST['room_name'];
    $room_type = $_POST['room_type'];
    $price_per_night = $_POST['price_per_night'];
    $availability_status = $_POST['availability_status'];
    $description = $_POST['description'];


    $sql = "UPDATE rooms SET room_name = ?, room_type = ?, price_per_night = ?, availability_status = ?, description =? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdssi", $room_name, $room_type, $price_per_night, $availability_status, $description, $room_id);


    if ($stmt->execute()) {
        echo "Room details updated successfully!";
        header("Location: admin.php"); 
        exit;
    } else {
        echo "Error updating room details: " . $conn->error;
    }
} else {
    echo "Invalid request!";
    exit;
}
?>
