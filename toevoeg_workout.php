<?php

session_start();

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $omschrijving = $_POST["omschrijving"];
    $duur = $_POST["duur"];
    $notitie = $_POST["notitie"];
    $toevoegdatum = $_POST["toevoegdatum"];
    $video = $_POST["video"];

    $result = mysqli_query($conn, "INSERT INTO workout (naam, omschrijving, duur, notitie, toevoegdatum, afbeelding) VALUES ('$naam', '$omschrijving', '$duur', '$notitie', '$toevoegdatum', '$video')");

     if ($result) {
        header('Location: toevoeg_workout.php');
     } else {
         echo "Registration failed. Please try again.";
     }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
    <title>Work4Me</title>
</head>
<body>
    <?php include 'header.php' ?>

    <main>
    <div class="register-container">
        <form action="" method="post">
            <h2>Workout Toevoegen</h2>
            <div class="form-group">
                <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required>
            </div>
            <div class="form-group">
                <label for="omschrijving">Omschrijving:</label>
                <input type="text" id="omschrijving" name="omschrijving">
            </div>
            <div class="form-group">
                <label for="duur">Duur:</label>
                <input type="text" id="duur" name="duur" placeholder="Alleen het aantal minuten" required>
            </div>
            <div class="form-group">
                <label for="notitie">Notitie:</label>
                <input type="text" id="notitie" name="notitie" required>
            </div>
            <div class="form-group">
                <label for="toevoegdatum">Datum van vandaag:</label>
                <input type="date" id="toevoegdatum" name="toevoegdatum" required>
            </div>
            <div class="form-group">
                <label for="video">Video:</label>
                <input type="text" id="video" name="video" placeholder="fotos/... .mp4" required>
            </div>
            <div class="form-group">
                <button type="submit" class="register-button">Registreer</button>
            </div>
        </form>
    </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>