<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $tussenvoegsels = $_POST["tussenvoegsels"];
    $achternaam = $_POST["achternaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $geslacht = $_POST["geslacht"];
    $straatnaam = $_POST["straat"];
    $huisnummer = $_POST["huisnummer"];
    $postcode = $_POST["postcode"];
    $plaats = $_POST["plaats"];
    $land = $_POST["land"];
    $tel = $_POST["tel"];
    $defaultRole = 'customer';

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                            //fixen!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!11
    $result = mysqli_query($conn, "INSERT INTO gebruikers (voornaam, tussenvoegsels, achternaam, gebruikersnaam, password, email, geslacht, rol, adresID) VALUES ('$voornaam', '$tussenvoegsels', '$achternaam', '$gebruikersnaam', '$hashed_password', '$email', '$geslacht', '$defaultRole')");
    $result2 = mysqli_query($conn, "INSERT INTO adres (straatnaam, huisnummer, postcode, plaats, land, telefoonnummer) VALUES ('$straatnaam' , '$huisnummer', '$postcode', '$plaats', '$land', '$tel')");

     if ($result && $result2) {
        header('Location: login.php');
     } else {
         echo "Registration failed. Please try again.";
     }

}
?>