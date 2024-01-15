<?php

session_start();

require 'database.php';

$sql = "SELECT * FROM workout";

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
        <div class="workout-container">
        <h1>Onze Workouts</h1>
            <div class="workout-list">
                <?php foreach($workouts as $work): ?>
                <div class="workout-item">
                    <h2><?php echo $work["naam"] ?></h2>
                    <p><?php echo $work["notitie"] ?></p>
                    <a href="detail_workout.php?id=<?php echo $work["workoutID"] ?>" class="workout-link">Meer Info</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>