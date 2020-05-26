<?php
/**
 * User: Stijn Verhoeven
 * Date: 02-05-2020
 * Time: 12:44
 * File: checklogin.php
 */
?>

<?php
$authUsers = Array(
    "Abu" => "bekend",
    "Stijn" => "onbekend",
    "Michi" => "123456",
    "Rowin" => "ragequitter",
    "Bas" => "mate"
);
?>

<?php
include "opdracht6.1.php";
foreach($authUsers as $user => $password) {

    if ($_POST['username'] == $user && $_POST['password'] == $password)
        $_SESSION['username'] = $_POST['username'];
        header('location: welkom.php');
        exit;
    }
}
$message = "Uw gebruikersnaam of wachtwoord in incorrect.";

?>
