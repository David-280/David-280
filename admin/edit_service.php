<?php
include('../config.php');

// Check if the service ID is provided
if (isset($_GET['id'])) {
    $service_id = $_GET['id'];

    $query = "SELECT * FROM service WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $service_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $service = $result->fetch_assoc();
    } else {
        echo "Service not found!";
        exit;
    }
} else {
    echo "Invalid service ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
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
</head>
<body>
    <div class="container">
        <h2>Edit Service</h2>
        <form action="update-service.php" method="POST">

            <div class="form-group">
                <label for="service_id">Service id</label>
                <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
            </div>
            <div class="form-group">
                <label for="service_name">Service Name</label>
                <input type="text" name="service_name" id="service_name" 
                    value="<?php echo htmlspecialchars($service['service_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="image_url">Service Image URL:</label>
                <input type="text" id="image_url" name="image_url" value="<?php echo htmlspecialchars($service['image_url']); ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" rows="4" required>
                    <?php echo htmlspecialchars($service['description']); ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="cost">Cost</label>
                <input type="number" step="0.01" name="cost" id="cost" 
                    value="<?php echo htmlspecialchars($service['cost']); ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update Service</button>
            <a href="admin.php" class="btn btn-primary">Back to Dashboard</a>
        </form>
    </div>
</body>
</html>
