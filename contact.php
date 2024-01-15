<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contact - Work4Me</title>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body>
    <?php include 'header.php' ?>

    <main>
        <div class="contact-container">
            <h1>Contacteer Ons</h1>
            <form id="contact-form" action="submit_contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Naam:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Bericht:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="contactbutton">Verstuur</button>
            </form>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>
