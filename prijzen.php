<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Work4Me</title>
</head>
<body>
    <?php include 'header.php' ?>
    
    <main>
        <h1 class="middentext">Big Sale! 20% op alle pakketen!</h1>
        <div class="sale">
            <p>De sale duurt nog:</p><div id="countdownTimer"></div>
        </div>
        <h2 class="txtprijzen">Onze Pakketen</h2>
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
    
    <script src="script.js"></script>
    <?php include 'footer.php' ?>
</body>
</html>