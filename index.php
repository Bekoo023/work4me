<?php
    session_start();

    $bmi = $status = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gewicht = $_POST["gewicht"];
    $lengte = $_POST["lengte"];

    if (!empty($gewicht) && !empty($lengte)) {
        $lengte = $lengte / 100; // converteer lengte van cm naar m
        $bmi = $gewicht / ($lengte * $lengte);
        $bmi = round($bmi, 1);

        if ($bmi < 18.5) {
            $status = "Ondergewicht";
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            $status = "Normaal gewicht";
        } elseif ($bmi >= 25 && $bmi < 30) {
            $status = "Overgewicht";
        } else {
            $status = "Obesitas";
        }
    }
}
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
        <div class="video-container">
            <video autoplay loop muted>
                <source src="fotos/videoachtergrond.mp4" type="video/mp4">
            </video>
        </div>
        
        <div class="kennismaken-container">
            <h2>Welkom bij de Workout: jouw sportschool in het centrum van Haarlem.</h2>
            <p>Wil je eerst liever even kennismaken om te bespreken of de sportschool van de Workout  bij jou past? Dat kan natuurlijk ook!</p>
            <button class="kennisbutton">Kennismaking</button>
        </div>
        
        <div class="bmi-container">
            <h1>BMI Calculator</h1>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onreset="resetForm()">
                <label for="gewicht">Gewicht (in kg):</label>
                <input type="number" id="gewicht" name="gewicht" required><br>
                
                <label for="lengte">Lengte (in cm):</label>
                <input type="number" id="lengte" name="lengte" required><br>
                
                <div class="button-group">
                    <input type="submit" value="Bereken BMI">
                    <input type="reset" value="Reset">
                </div>
            </form>
            
            <div id="resultt">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (!empty($bmi) && !empty($status)) {
                        echo "<h3>Jouw BMI: " . $bmi . "</h3>";
                        echo "<h3>Status: " . $status . "</h3>";
                    } else {
                        echo "<h3>Vul alle velden in.</h3>";
                    }
                }
                ?>
            </div>
        </div>
        
        <div class="testimonials-section">
            <h2>Klantbeoordelingen</h2>
            <div class="voortext">
                <div class="testimonial-block">
                    <img src="fotos/man1.jpg" alt="Klantfoto Jan Smit" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Ik hou van de flexibiliteit die Work4Me biedt. Ik kan trainen wanneer het mij uitkomt en de instructievideo's zijn erg duidelijk.<span class="quote-icon">”</span></p><br>
                    <p class="testimonial-author">- Jan Smit</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/vrouw.jpg" alt="Klantfoto Emma de Vries" class="testimonial-image">
                    <p><span class="quote-icon">“</span>De yogalessen van Work4Me zijn fantastisch. Ze helpen me te ontspannen na een lange werkdag.<span class="quote-icon">”</span></p><br>
                    <p class="testimonial-author">- Emma de Vries</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/man2.jpg" alt="Klantfoto Ahmed Al-Zahra" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Sinds ik begonnen ben met Work4Me, voel ik me sterker en energieker!<span class="quote-icon">”</span></p><br><br>
                    <p class="testimonial-author">- Ahmed Al-Zahra</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/vrouw2.jpg" alt="Klantfoto Lisa de Jong" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Work4Me heeft mijn kijk op fitness volledig veranderd. Ik heb mijn fitnessdoelen sneller bereikt dan ik ooit voor mogelijk hield!<span class="quote-icon">”</span></p><br>
                    <p class="testimonial-author">- Lisa de Jong</p>
                </div>
            </div>
        </div>
    </main>
    
    <script src="script.js"></script>
    <?php include 'footer.php' ?>
</body>
</html>