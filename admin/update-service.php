<?php 
include('../config.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $service_id = $_POST['id'];
    $service_name = $_POST['service_name'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];

    if (empty($service_id)) {
        exit("Error: Service ID is missing");
    }

    $query = "UPDATE service SET service_name = ?, image_url = ?, description = ?, cost = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt->bind_param("sssdi", $service_name, $image_url, $description, $cost, $service_id)) {
        exit("Binding failed on SQL");
    }

    if (!$stmt->execute()) {
        exit("Update failed: " . $stmt->errno);
    }

    header("location: admin.php");
} else {
    exit("Invalid request method");
}
