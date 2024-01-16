<?php

session_start();

require 'database.php';

$sortOption = "naam";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM workout WHERE naam LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
} else {

    if (isset($_GET['sort'])) {
        $sortOption = $_GET['sort'];
    }

    $sql = "SELECT * FROM workout ORDER BY $sortOption";

    $result = mysqli_query($conn, $sql);
}

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
            <form action="workout.php" method="get">
                <input type="text" name="search" placeholder="Zoek workout...">
                <button type="submit">Zoeken</button>
            </form>

            <form action="workout.php" method="get">
                <label for="sort">Sorteer op:</label>
                <select name="sort" id="sort">
                    <option value="naam" <?php if ($sortOption === "naam") echo "selected"; ?>>Naam</option>
                    <option value="duur" <?php if ($sortOption === "duur") echo "selected"; ?>>Duur</option>
                </select>
                <button type="submit">Sorteren</button>
            </form>

            <div class="workout-list">
                <?php foreach ($workouts as $work): ?>
                <div class="workout-item">
                    <h2><?php echo $work["naam"] ?></h2>
                    <p><?php echo $work["notitie"] ?></p>
                    <a href="detail_workout.php?id=<?php echo $work["workoutID"] ?>" class="workout-link">Meer Info</a>
                </div>
                <?php endforeach; ?>
                <?php if (empty($workouts)) {
                    echo "Geen workouts gevonden.";
                } ?>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>
