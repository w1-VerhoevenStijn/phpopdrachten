<?php
/**
 * User: Stijn Verhoeven
 * Date: 05-04-2020
 * Time: 20:30
 * File: Opdracht5.3.php
 */
?>
<?php
include "includes/header.php"
?>
<form action="form_data5.3.php" method="post">

    <label>Corona enquete:</label><br>
    <hr>
    <label>Wat is je naam:</label><input name="FirstLastName" type="text"><br>
    <label>Wat is je leeftijd:</label><input name="Age" type="number"><br>
    <label>Gemeente:</label>
    <select name="Township">
        <option value="Den Bosch">Den Bosch</option>
        <option value="Tilburg">Tilburg</option>
        <option value="LoonOpZand">Loon op Zand</option>
        <option value="Waalwijk">Waalwijk</option>
    </select><br>
    <label>Aantal inwoners gemeente:</label><input name="citizens" type="number"><br>
    <label>Ken je mensen die besmet zijn in je woonplaats?</label>
    <input name="Question" type="radio" value="Ja">Ja</input>
    <input name="Question" type="radio" value="Nee">Nee</input><br>
    <label>Aantal mensen besmet in je gemeente?</label><input name="infected" type="number"><br>
    <input type="submit" name="send" value="send"><br>
    <label>Zie aantallen per gemeente per 100.000 bewoners <a href="https://www.rivm.nl/coronavirus-kaart-van-nederland-per-gemeente" target="_blank">site RIVM</a></label>
</form>
<?php
include "includes/footer.php"
?>
