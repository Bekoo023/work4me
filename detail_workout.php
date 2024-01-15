<?php

session_start();

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM workout WHERE workoutID = $id";

$result = mysqli_query($conn,$sql);

$workouts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
        <div class="workout-detail-container">
            <?php foreach($workouts as $work): ?>
            <div class="video-containerr">
                <video autoplay loop muted>
                    <source src="<?php echo $work["afbeelding"] ?>" type="video/mp4">
                </video>
            </div>
            <div class="workout-infoo">
                <h2><?php echo $work["naam"] ?></h2>
                <p><strong>Omschrijving:</strong> <?php echo $work["omschrijving"] ?></p>
                <p><strong>Duur:</strong> <?php echo $work["duur"] ?> minuten</p>
                <p><strong>Toegevoegd op:</strong> <?php echo $work["toevoegdatum"] ?></p>
                <p><strong>Notitie:</strong><?php echo $work["notitie"] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </main>

<?php include 'footer.php' ?>
</body>
</html>