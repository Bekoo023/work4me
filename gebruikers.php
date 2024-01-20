<?php

session_start();

require 'database.php';

$sortOption = "voornaam_asc"; // Standaard sorteeroptie

// Zoekfunctionaliteit
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE voornaam LIKE CONCAT('%', ?, '%')");
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $users = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }
} else {
    // Sorteerfunctionaliteit
    if (isset($_GET['sort'])) {
        $sortOption = $_GET['sort'];
    }

    // Controleer of de sorteeroptie geldig is om SQL-injectie te voorkomen
    $allowedSortOptions = ["voornaam_asc", "voornaam_desc"];
    if (!in_array($sortOption, $allowedSortOptions)) {
        $sortOption = "voornaam_asc"; // Terugvallen op standaard sorteeroptie als de opgegeven optie niet geldig is
    }

    $orderDirection = strpos($sortOption, "desc") ? "DESC" : "ASC";
    $sql = "SELECT * FROM gebruikers ORDER BY voornaam $orderDirection";

    $result = $conn->query($sql);
    $users = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
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

    <h1 class="textcenter">Alle Gebruikers</h1>
    <div class="zoekgebruiker-container">
        <form action="gebruikers.php" method="get">
            <input type="text" name="search" placeholder="Zoek gebruiker...">
            <button type="submit">Zoeken</button>
        </form>
    </div>

    <div class="sorteer-container">
        <form action="gebruikers.php" method="get">
        <label for="sort">Sorteer op:</label>
            <select name="sort" id="sort">
                <option value="voornaam_asc" <?php if ($sortOption === "voornaam_asc") echo "selected"; ?>>A-Z</option>
                <option value="voornaam_desc" <?php if ($sortOption === "voornaam_desc") echo "selected"; ?>>Z-A</option>
            </select>
            <button type="submit">Sorteren</button>
        </form>
    </div>

    <div class="admin-container">
    <table class="user-table">
        <tr>
            <th>Voornaam</th>
            <th>Tussenvoegsels</th>
            <th>Achternaam</th>
            <th>Gebruikersnaam</th>
            <th>Geslacht</th>
            <th>Rol</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user["voornaam"] ?></td>
            <td><?php echo $user["tussenvoegsels"] ?></td>
            <td><?php echo $user["achternaam"] ?></td>
            <td><?php echo $user["gebruikersnaam"] ?></td>
            <td><?php echo $user["geslacht"] ?></td>
            <td><?php echo $user["rol"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    </main>

<?php include 'footer.php' ?>
</body>
</html>