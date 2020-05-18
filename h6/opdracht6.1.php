<?php
/**
 * User: Stijn Verhoeven
 * Date: 02-05-2020
 * Time: 12:44
 * File: Opdracht6.1.php
 */
?>

<?php
include "../includes/header.php";
include "../includes/variablelen.php";
?>

<form action="checklogin.php" method="post">
    <label>Username: </label>
    <input type="text" name="username"><br>
    <label>Password: </label>
    <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

<?php
include "../includes/footer.php";
?>
