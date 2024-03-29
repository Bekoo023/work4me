<?php
session_start();

if (!isset($_SESSION['gebruikersnaam'])) {
    header("Location: login.php");
    exit();
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
        <div class="dashboard-container">
            <div class="dashboard-item">
                <h2>Mijn workouts</h2>
            </div>
            <div class="dashboard-item">
                <h2>Mijn proces</h2>
            </div>
            <div class="dashboard-item">
                <h2>Mijn notities</h2>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>