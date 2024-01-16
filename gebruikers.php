<?php

    session_start();

    require 'database.php';

    $sql = "SELECT * FROM gebruikers";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $users = array();
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