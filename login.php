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
        <div class="login-container">
            <h2>Login bij Work4Me</h2>
            <form action="login-proces.php" method="post">
                <div class="form-group">
                    <label for="gebruikersnaam">Gebruikersnaam:</label>
                    <input type="text" id="gebruikersnaam" name="gebruikersnaam" required>
                </div>
                <div class="form-group">
                    <label for="password">Wachtwoord:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="login-button">Login</button>
                </div>
            </form>
            <div class="login-links">
                <a href="password_reset.php">Wachtwoord vergeten?</a>
                <a href="registreer.php">Registreer</a>
            </div>
        </div>
    </main>

<?php include 'footer.php' ?>
</body>
</html>