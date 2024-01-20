//slide

let currentImageIndex = 0;
let images = document.querySelectorAll("#slideshow img");

function showNextImage() {
    images[currentImageIndex].style.display = 'none';
    currentImageIndex = (currentImageIndex + 1) % images.length;
    images[currentImageIndex].style.display = 'block';
}

function showPreviousImage() {
    images[currentImageIndex].style.display = 'none';
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    images[currentImageIndex].style.display = 'block';
}


let netEl = document.getElementById('next');
let prevEl = document.getElementById('previous');

if(netEl != null){
    netEl.addEventListener('click', showNextImage);
}

if(prevEl != null){
    prevEl.addEventListener('click', showPreviousImage);
}

//countdown

var countDownDatum = new Date("Jan 23, 2024 12:00:00").getTime();

var x = setInterval(function() {

  var nu = new Date().getTime();
    
  var verschil = countDownDatum - nu;
    
  var days = Math.floor(verschil / (1000 * 60 * 60 * 24));
  var hours = Math.floor((verschil % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((verschil % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((verschil % (1000 * 60)) / 1000);
    
  document.getElementById("countdownTimer").innerHTML = days + " dagen " + hours + " uurtjes "
  + minutes + " minuten " + seconds + " seconden ";
    
  if (verschil < 0) {
    clearInterval(x);
    document.getElementById("countdownTimer").innerHTML = "Klaar!!";
  }
}, 1000);


//sale

document.addEventListener("DOMContentLoaded", function() {
  // Stel de oorspronkelijke prijzen en de korting in
  var originalPrices = [29.99, 49.99, 69.99];
  var discount = 0.20; // 20% korting

  // Vind alle prijzen op de pagina
  var prices = document.querySelectorAll(".price");

  // Loop door alle prijzen en voeg doorstreepte oorspronkelijke prijzen en nieuwe prijzen met korting toe
  function updatePrices() {
    for (var i = 0; i < prices.length; i++) {
        var originalPrice = originalPrices[i];
        var discountedPrice = originalPrice * (1 - discount);

        // Voeg de doorstreping en nieuwe prijs toe aan de HTML van de prijs
        prices[i].innerHTML = '<span class="original-price">€' + originalPrice.toFixed(2) + '</span>' +
                              '<span class="discounted-price">€' + discountedPrice.toFixed(2) + '</span>';
    }
}

// Roep de functie onmiddellijk aan om de prijzen in te stellen
updatePrices();

// Voeg een timer toe om de prijzen na een bepaald aantal seconden bij te werken (bijv. na 10 seconden)
setTimeout(function() {
    // Hier kun je nieuwe prijzen instellen als de sale is afgelopen
    // Bijvoorbeeld, de oorspronkelijke prijzen zonder korting
    originalPrices = [29.99, 49.99, 69.99];

    // Werk de prijzen bij
    updatePrices();
}, 10000); // 10 seconden (10000 milliseconden)
});

//bmi

function resetForm() {
  document.getElementById("resultt").innerHTML = "";
}