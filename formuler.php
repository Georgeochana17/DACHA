<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($email) && !empty($message)) {
        // Använd förberedda uttalanden för att undvika SQL-injektion
        $stmt = $con->prepare("INSERT INTO information (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            // Data har lagrats i databasen
            header("Location: index.php");
            die;
        } else {
            // Fel vid lagring i databasen
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Felaktig inmatning
        echo "Vänligen fyll i alla fält.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style type="text/css">
        body {
            background: url('image.jpg') center center fixed;
            padding-top: 40px;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .menu a {
            color: white;
            text-decoration: none;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="menu">
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="contact.php">Contact</a>
        <a href="logout.php">Logout</a>
    </div>

    <h1>Fyll i formuläret</h1>

    <form action= "formuler.php" method="post">
        <label for="name">Namn:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-post:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Meddelande:</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Skicka">
    </form>
</body>
</html>
