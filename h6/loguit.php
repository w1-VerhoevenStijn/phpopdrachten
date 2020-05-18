<?php
/**
 * User: Stijn Verhoeven
 * Date: 02-05-2020
 * Time: 12:55
 * File: loguit.php
 */
?>

<?php
include "../includes/header.php";
include "../includes/variablelen.php";
?>

<?php


session_destroy();

header('location: Opdracht6.1.php');

?>

<?php
include "../includes/footer.php"
?>
