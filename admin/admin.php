<?php
session_start();
include('../config.php');


if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: admin_login.php');
    exit;
}


$rooms = $conn->query("SELECT * FROM rooms ORDER BY id DESC");
$services = $conn->query("SELECT * FROM service ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 90%;
        }

        h1 {
            text-align: center;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: #fff;
        }

        .btn {
            padding: 8px 15px;
            margin: 5px;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .form-container {
            margin: 20px 0;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px;
                font-size: 14px;
            }

            h1 {
                font-size: 1.2rem;
            }

            table, th, td {
                font-size: 12px;
                padding: 8px;
            }

            .container {
                padding: 10px;
                width: 100%;
            }

            .btn {
                padding: 6px 12px;
                font-size: 14px;
            }

            .form-group input, .form-group select, .form-group textarea {
                font-size: 14px;
            }

            .form-container {
                margin-top: 30px;
            }

            .navbar a {
                margin-left: 10px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                font-size: 12px;
                padding: 8px;
            }

            h1 {
                font-size: 1rem;
            }

            table, th, td {
                font-size: 10px;
                padding: 6px;
            }

            .btn {
                padding: 5px 10px;
                font-size: 12px;
            }

            .container {
                margin: 10px;
                padding: 10px;
            }

            .navbar a {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <h1>Admin Dashboard: </h1>
    <p>Welcome Montana Resorts Most Trained Receptionists</p>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <h2>Manage Rooms</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($room = $rooms->fetch_assoc()): ?>
            <tr>
                <td><?= $room['id'] ?></td>
                <td><?= $room['room_name'] ?></td>
                <td><?= $room['room_type'] ?></td>
                <td>₦<?= number_format($room['price_per_night'], 2) ?></td>
                <td><?= $room['availability_status'] ?></td>
                <td>
                    <a href="edit_room.php?id=<?= $room['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="delete-rooms.php?id=<?= $room['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="add_room.php" class="btn btn-success">Add New Room</a>
</div>

<div class="container">
    <h2>Manage Services</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php while ($service = $services->fetch_assoc()): ?>
            <tr>
                <td><?= $service['id'] ?></td>
                <td><?= $service['service_name'] ?></td>
                <td><?= $service['description'] ?></td>
                <td>₦<?= number_format($service['cost'], 2) ?></td>
                <td>
                    <a href="edit_service.php?id=<?= $service['id'] ?>" class="btn btn-warning">Edit</a>
                    <a href="delete-service.php?id=<?= $service['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="add_service.php" class="btn btn-success">Add New Service</a>
</div>

</body>
</html>
