<?php

require 'database.php';

session_start();

$error = "Verkeerde gegevens";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM gebruikers WHERE gebruikersnaam='$gebruikersnaam'");
    $row = mysqli_fetch_assoc($result);
    
    if ($row && password_verify($password, $row['password'])) {

        $_SESSION['rol'] = $row['rol'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['id'] = $row['id'];

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
                $error = "Verkeerde login gegevens!";
        }
        exit;
    } else {
        $error = "Verkeerde login gegevens!";
    }

}