<?php

include('../config.php');


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $service_id = intval($_GET['id']);


    $sql = "DELETE FROM service WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $service_id);


    if ($stmt->execute()) {
      
        header("Location: ../services.php?message=service deleted successfully");
        exit();
    } else {

        echo "Error deleting service: " . $conn->error;
    }
} else {
  
    header("Location: ../service.php?message=Invalid service ID");
    exit();
}
?>
