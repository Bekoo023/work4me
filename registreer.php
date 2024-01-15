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
        <form action="registratie-proces.php" method="post">
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
                <label for="straat">Straatnaam:</label>
                <input type="text" id="straat" name="straat" required>
            </div>
            <div class="form-group">
                <label for="huisnummer">Huisnummer:</label>
                <input type="text" id="huisnummer" name="huisnummer" required>
            </div>
            <div class="form-group">
                <label for="postcode">Postcode:</label>
                <input type="text" id="postcode" name="postcode" required>
            </div>
            <div class="form-group">
                <label for="plaats">Plaats:</label>
                <input type="text" id="plaats" name="plaats" required>
            </div>
            <div class="form-group">
                <label for="land">Land:</label>
                <input type="text" id="land" name="land" required>
            </div>
            <div class="form-group">
                <label for="tel">Telefoonnummer:</label>
                <input type="tel" id="tel" name="tel" required>
            </div>
            <div class="form-group">
                <button type="submit" class="register-button">Registreer</button>
            </div>
            <div class="login-links">
                <p>Heeft u al een account? <a href="login.php">Login!</a></p>
            </div>
        </form>
    </div>
    </main>

<?php include 'footer.php' ?>
</body>
</html>