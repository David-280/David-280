<?php
include('config.php'); 


$sql = "SELECT * FROM  service";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
        $services[] = $row; 
    }
} else {
    echo "No rooms available.";
}

$conn->close();
?>