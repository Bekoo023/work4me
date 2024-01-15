<?php
    session_start();
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
        <h2 class="txtprijzen">Onze Prijzen</h2>
        <div class="pricing-container">
            <div class="pricing-plan">
                <h2>Basis Plan</h2>
                <p class="price">€29.99/maand</p>
                <ul>
                    <li>Toegang tot basis workout videos</li>
                    <li>Wekelijkse fitness tips</li>
                    <li>75 groepslessen</li>
                </ul>
                <button class="buttonprijs">Aanmelden</button>
            </div>

            <div class="pricing-plan">
                <h2>Premium Plan</h2>
                <p class="price">€49.99/maand</p>
                <ul>
                    <li>Toegang tot alle workout videos</li>
                    <li>Wekelijkse fitness tips</li>
                    <li>Persoonlijke voedingsadviezen</li>
                    <li>150 groepslessen</li>
                </ul>
                <button class="buttonprijs">Aanmelden</button>
            </div>

            <div class="pricing-plan">
                <h2>Golden Plan</h2>
                <p class="price">€69.99/maand</p>
                <ul>
                    <li>Toegang tot alle workout videos</li>
                    <li>Wekelijkse fitness tips</li>
                    <li>Persoonlijke voedingsadviezen</li>
                    <li>Personel trainer</li>
                    <li>175 groepslessen</li>
                </ul>
                <button class="buttonprijs">Aanmelden</button>
            </div>
        </div>
    </main>

<?php include 'footer.php' ?>
</body>
</html>