<?php

require 'database.php';

session_start();

$error = "Verkeerde gegevens";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM gebruikers WHERE gebruikersnaam='$gebruikersnaam'");
    $login = mysqli_fetch_assoc($result);
    
    if ($login && password_verify($password, $login['password'])) {
        
        $_SESSION['isloggedIN'] = true;
        $_SESSION['rol'] = $login['rol'];
        $_SESSION['gebruikersnaam'] = $login['gebruikersnaam'];
        $_SESSION['password'] = $login['password'];
        $_SESSION['id'] = $login['id'];

        switch ($_SESSION['rol']) {
            case 'administrator':
                header('Location: admin_dashboard.php');
                break;
            case 'manager':
                header('Location: manager_dashboard.php');
                break;
            case 'customer':
                header('Location: dashboard.php');
                break;
            default:
                header('Location: login.php');
                break;
        }
        exit;
    } else {
        header('Location: login.php');
    }

}