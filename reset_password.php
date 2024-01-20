<?php
// Dit script verwerkt de wachtwoordreset

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];
    $token = $_POST['token'];

    // Validatie en wachtwoord update logica hier
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reset_password.php" method="post">
        Nieuw Wachtwoord: <input type="password" name="new_password"><br>
        Bevestig Nieuw Wachtwoord: <input type="password" name="confirm_new_password"><br>
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
        <input type="submit" value="Wachtwoord Resetten">
    </form>
    
</body>
</html>
