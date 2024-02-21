<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website</title>
    <style type="text/css">
        body {
            background: url('image.jpg') center center fixed;
            padding-top: 40px; /* Justera paddingen vid behov */
            margin: 0;
        }

        .menu {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
            position: fixed; /* Fixera menyn högst upp */
            top: 0; /* Ange översta positionen till 0 */
            width: 100%; /* Gör menyn full bredd */
            z-index: 1000; /* Ange ett högt z-index för att se till att den är över andra element */
        }

        .menu a {
            color: white;
            text-decoration: none;
        }

       
        /* Media query för mindre skärmar */
        @media (max-width: 600px) {
            .button-images a {
                flex: 0 0 100%; /* Gör varje bild full bredd på mindre skärmar */
            }
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

	
    <h1>This is the Contact page</h1>

    
        </a>
    </div>
</body>
</html>
