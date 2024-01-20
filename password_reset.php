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
        <form action="password_reset_proces.php" method="post">
            E-mailadres: <input type="email" name="email">
            <input type="submit" value="Reset Link Versturen">
        </form>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>