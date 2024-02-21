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

        .button-images {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            
        }

        .button-images a {
            margin: 10px; /* Justera marginalen vid behov */
            text-align: center; /* Centrera bilden och texten inom dess behållare */
            text-decoration: none; /* Ta bort understrykningar från länkar */
            color: black; /* Ange textfärgen */
			background-color: white;
        }

        .button-images img {
            width: 300px; /* Justera storleken vid behov */
            height: 200px; /* Justera storleken vid behov */
            cursor: pointer;
			
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

        .button_tex {
            font-weight: bold;
            color: blue;
            font-size: 16px;
            text-decoration: underline;
			
			
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
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="logout.php">Logout</a>
    </div>

	
    <h1>This is the index page</h1>

    <div class="button-images">
        <a href="#">
            <img src="boföring.jpg" alt="Button 1">
            <p class="button_tex">Tryck här för att komma till formuläret </p>
        </a>
        <a href="#">
            <img src="boföring2.jpg" alt="Button 2">
            <p class="button_tex">Text for Button 2</p>
        </a>
		</div>
		<div class="button-images">

        <a href="#">
            <img src="boföring3.jpg" alt="Button 3">
            <p class="button_tex">Text for Button 3</p>
        </a>
        <a href="#">
            <img src="boföring4.jpg" alt="Button 4">
            <p class="button_tex">Text for Button 4</p>
        </a>
    </div>
</body>
</html>
