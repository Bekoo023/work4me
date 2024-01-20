<?php
// Verbinding met de database
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Controleer of het e-mailadres bestaat in de database
    $query = $conn->prepare("SELECT id FROM gebruikers WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Genereer een unieke token
        $token = bin2hex(random_bytes(50));

        // Sla de token op in de database
        $updateQuery = $conn->prepare("UPDATE gebruikers SET reset_token = ?, token_expiry = DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email = ?");
        $updateQuery->bind_param("ss", $token, $email);
        $updateQuery->execute();

        // Verstuur een e-mail met de resetlink
        $resetLink = "localhost/reset_password.php?token=" . $token;
        $to = $email;
        $subject = "Wachtwoord Reset";
        $message = "Klik hier om je wachtwoord te resetten: " . $resetLink;
        // Mailfunctie hier gebruiken (vereist aanvullende configuratie)
    }

    echo "Als het e-mailadres bestaat in onze database, wordt er een resetlink verstuurd.";
}
?>
