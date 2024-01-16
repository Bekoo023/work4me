<?php

session_start();

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $tussenvoegsels = $_POST["tussenvoegsels"];
    $achternaam = $_POST["achternaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $geslacht = $_POST["geslacht"];
    $rol = $_POST["rol"];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            //fixen!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11
    $result = mysqli_query($conn, "INSERT INTO gebruikers (voornaam, tussenvoegsels, achternaam, gebruikersnaam, password, email, geslacht, rol) VALUES ('$voornaam', '$tussenvoegsels', '$achternaam', '$gebruikersnaam', '$hashed_password', '$email', '$geslacht', '$rol')");

     if ($result) {
        header('Location: dashboard.php');
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
        <h2>Registreer voor Work4Me</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" required>
            </div>
            <div class="form-group">
                <label for="tussenvoegsels">Tussenvoegsels:</label>
                <input type="text" id="tussenvoegsels" name="tussenvoegsels">
            </div>
            <div class="form-group">
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" required>
            </div>
            <div class="form-group">
                <label for="gebruikersnaam">Gebruikersnaam:</label>
                <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="geslacht">Geslacht:</label>
                <select id="geslacht" name="geslacht">
                    <option value="man">Man</option>
                    <option value="vrouw">Vrouw</option>
                </select>
            </div>
            <div class="form-group">
                <label for="rol">Rol:</label>
                <select id="rol" name="rol">
                    <option value="administrator">Administrator</option>
                    <option value="Manager">Manager</option>
                    <option value="customer">Customer</option>
                </select>
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