<?php

include('../config.php');


if (isset($_GET['id']) && !empty($_GET['id'])) {
    $room_id = intval($_GET['id']);


    $sql = "DELETE FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $room_id);


    if ($stmt->execute()) {
      
        header("Location: ../rooms.php?message=Room deleted successfully");
        exit();
    } else {

        echo "Error deleting room: " . $conn->error;
    }
} else {
  
    header("Location: ../rooms.php?message=Invalid Room ID");
    exit();
}
?>
