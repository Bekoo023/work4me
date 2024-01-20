<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Work4Me</title>
</head>
<body>
    <?php include 'header.php' ?>
    
    <main>
        
        <div id="slideshow">
            <img src="fotos/facebook.jpg" style="display: block;">
            <img src="fotos/instagram.jpg" style="display: none;">
            <img src="fotos/snapchat.jpg" style="display: none;">
            <button id="previous">Vorige</button>
            <button id="next">Volgende</button>
        </div>
        
    </main>
    
    <script src="script.js"></script>

    <?php include 'footer.php' ?>
</body>
</html>