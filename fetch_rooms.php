<?php
include('config.php'); 


$sql = "SELECT * FROM rooms";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
        $rooms[] = $row; 
    }
} else {
    echo "No rooms available.";
}

$conn->close();
?>