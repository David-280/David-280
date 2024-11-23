
<?php

include('../config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];
    $image_url = $_POST['image_url'];

    
    $sql = "INSERT INTO service (service_name, cost, description, image_url) 
            VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdss",$service_name, $cost, $description, $image_url);

    if ($stmt->execute()) {
        echo "Service added successfully!";
        header("Location: ../services.php"); 
        exit;
    } else {
        echo "Error adding Service: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #343a40;
            color: #fff;
            padding: 15px;
            text-align: center;
        }

        .navbar a {
            color: #ffc107;
            text-decoration: none;
            margin-left: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: white;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            padding: 10px 20px;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-primary {
            background-color: #007bff;
            margin-left: 10px;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .error {
            color: #dc3545;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <h1>Add New Service</h1>
    <a href="admin.php">Back to Dashboard</a>
</div>

<div class="container">
    <?php if (isset($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
        <div class="form-group">
            <label for="service_name">Service Name</label>
            <input type="text" name="service_name" id="service_name" required>
        </div>
        <div class="form-group">
            <label for="image_url">Service Image Url:</label>
            <input type="text" id="image_url" name="image_url" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4" required></textarea>
        </div>
        <div class="form-group">
            <label for="cost">Cost</label>
            <input type="number" step="0.01" name="cost" id="cost" required>
        </div>
        <button type="submit" class="btn btn-success">Add Service</button>
        <a href="admin.php" class="btn btn-primary">Back to Dashboard</a>
    </form>
</div>

</body>
</html>
