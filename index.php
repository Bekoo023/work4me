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
        <div class="testimonials-section">
            <h2>Klantbeoordelingen</h2>
            <div class="voortext">
                <div class="testimonial-block">
                    <img src="fotos/man1.jpg" alt="Klantfoto Jan Smit" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Ik hou van de flexibiliteit die Work4Me biedt. Ik kan trainen wanneer het mij uitkomt en de instructievideo's zijn erg duidelijk.<span class="quote-icon">”</span></p>
                    <p class="testimonial-author">- Jan Smit</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/vrouw.jpg" alt="Klantfoto Emma de Vries" class="testimonial-image">
                    <p><span class="quote-icon">“</span>De yogalessen van Work4Me zijn fantastisch. Ze helpen me te ontspannen na een lange werkdag.<span class="quote-icon">”</span></p>
                    <p class="testimonial-author">- Emma de Vries</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/man2.jpg" alt="Klantfoto Ahmed Al-Zahra" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Sinds ik begonnen ben met Work4Me, voel ik me sterker en energieker!<span class="quote-icon">”</span></p>
                    <p class="testimonial-author">- Ahmed Al-Zahra</p>
                </div>
                <div class="testimonial-block">
                    <img src="fotos/vrouw2.jpg" alt="Klantfoto Lisa de Jong" class="testimonial-image">
                    <p><span class="quote-icon">“</span>Work4Me heeft mijn kijk op fitness volledig veranderd. Ik heb mijn fitnessdoelen sneller bereikt dan ik ooit voor mogelijk hield!<span class="quote-icon">”</span></p>
                    <p class="testimonial-author">- Lisa de Jong</p>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
</html>