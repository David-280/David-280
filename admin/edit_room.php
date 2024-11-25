<?php

include('../config.php');
if (isset($_GET['id'])) {
    $room_id = $_GET['id'];

    $query = "SELECT * FROM rooms WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $room_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $room = $result->fetch_assoc();
    } else {
        echo "Room not found!";
        exit;
    }
} else {
    echo "Invalid room ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Room</title>
    <style>

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
}


.container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #444;
    margin-bottom: 20px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

textarea {
    resize: none;
    height: 100px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    font-size: 1rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    input, select, textarea, button {
        font-size: 0.9rem;
    }
}


@media (max-width: 480px) {
    form {
        gap: 10px;
    }

    label {
        font-size: 0.9rem;
    }

    input, select, textarea {
        font-size: 0.85rem;
    }

    button {
        font-size: 0.85rem;
        padding: 8px 12px;
    }
}

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Edit Room</h2>
        <form action="update-room.php" method="POST">
            <input type="hidden" name="room_id" value="<?php echo $room['id']; ?>">

            <label for="room_name">Room Name:</label>
            <input type="text" id="room_name" name="room_name" value="<?php echo $room['room_name']; ?>" required>

            <label for="room_type">Room Type:</label>
            <input type="text" id="room_type" name="room_type" value="<?php echo $room['room_type']; ?>" required>

            <label for="price">Price:</label>
            <input type="number" id="price_per_night" name="price_per_night" value="<?php echo $room['price_per_night']; ?>" required>

            <label for="availability_status">availability_status:</label>
            <select id="availability_status" name="availability_status">
                <option <?php if ($room['availability_status'] == 1) echo 'selected'; ?>>Available</option>
                <option <?php if ($room['availability_status'] == 0) echo 'selected'; ?>>Not Available</option>
            </select>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo $room['description']; ?></textarea>

            <button type="submit">Update Room</button>
        </form>
    </div>
</body>
</html>
