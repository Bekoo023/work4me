<?php
session_start();

if (!isset($_SESSION['gebruikersnaam'])) {
    header("Location: login.php");
    exit();
}

require 'database.php';

$sqlUsers = "SELECT COUNT(*) as total_users FROM gebruikers";
$resultUsers = mysqli_query($conn, $sqlUsers);
$rowUsers = mysqli_fetch_assoc($resultUsers);
$totalUsers = $rowUsers['total_users'];

$sqlWorkouts = "SELECT COUNT(*) as total_workouts FROM workout";
$resultWorkouts = mysqli_query($conn, $sqlWorkouts);
$rowWorkouts = mysqli_fetch_assoc($resultWorkouts);
$totalWorkouts = $rowWorkouts['total_workouts'];

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
        <div class="admin-container">
            <h1>Welkom manager</h1><br>
        </div>
        <div class="admin-stats">
            <div class="user-stats">
                <h2>Aantal Gebruikers</h2>
                <p><?php echo $totalUsers; ?></p>
                <a href="gebruikers.php"><button class="admin-button">Bekijk alle gebruikers</button></a>
            </div>
            <div class="workout-stats">
                <h2>Aantal Workouts</h2>
                <p><?php echo $totalWorkouts; ?></p>
                <a href="workout.php"><button class="admin-button">Bekijk alle workouts</button></a>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>