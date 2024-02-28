

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Answers</title>
    <style>
        /* CSS för att ändra bakgrundsfärgen till silver */
        body {
            background-color: silver;
        }
    </style>
</head>
<body>




<?php
// Inkludera anslutningsfilen till din databas
include("connection.php");

// Hämta datan från databasen
$sql = "SELECT name, email, message FROM information";
$result = $con->query($sql);

// Visa datan på sidan
if ($result->num_rows > 0) {
    echo "<h2>Svar från användare:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>Namn:</strong> " . $row["name"] . "</p>";
        echo "<p><strong>E-post:</strong> " . $row["email"] . "</p>";
        echo "<p><strong>Meddelande:</strong> " . $row["message"] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p>Inga svar hittades.</p>";
}

// Stäng anslutningen till databasen
$con->close();
?>

