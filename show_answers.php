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
            font-family: Arial, sans-serif;
        }

        /* CSS för tabellen */
        table {
            width: 80%; /* Bredden på tabellen, justera vid behov */
            margin: 20px auto; /* Centrera tabellen på sidan */
            border-collapse: collapse; /* Kombinera gränser för att undvika mellanrum mellan celler */
        }

        th, td {
            padding: 8px; /* Utfyllnad inuti varje cell */
            border-bottom: 1px solid #ddd; /* Linje under varje rad */
            text-align: left; /* Vänsterjustera texten */
        }

        th {
            background-color: #f2f2f2; /* Bakgrundsfärg för rubrikerna */
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

// Visa rubriker för tabellen
echo "<table>";
echo "<tr><th>Företag</th><th>E-post</th><th>Försäljning utomlands</th></tr>";

// Visa datan på sidan
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        
        
        echo "</tr>";
    }
} else {
    // Inga svar hittades
    echo "<tr><td colspan='3'>Inga svar hittades.</td></tr>";
}

// Stäng anslutningen till databasen
$con->close();

echo "</table>";
?>

</body>
</html>
