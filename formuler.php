<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
include("connection.php");
include("functions.php");

if (isset($_SESSION['success_message'])) {
    echo '<div style="text-align:center; font-size: 24px; color: green;">' . $_SESSION['success_message'] . '</div>';
    unset($_SESSION['success_message']);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    // Hämta user_id från sessionen eller sätt till null om det inte finns
    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    if (!empty($name) && !empty($email) && !empty($message)) {
        $stmt = $con->prepare("INSERT INTO information (user_id, name, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $user_id, $name, $email, $message);

        if ($stmt->execute()) {
            $_SESSION['success_message'] = "Tack! Din information har sparats.";
            header("Location: formuler.php");
            die;
        } else {
            echo "Det gick inte att spara informationen: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Vänligen fyll i alla fält.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulär</title>
</head>
<body>

<div class="menu">
    <a href="index.php">Home</a>
    <a href="aboutus.php">About Us</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
</div>

<h1>Fyll i formuläret</h1>

<form action="formuler.php" method="post">
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
