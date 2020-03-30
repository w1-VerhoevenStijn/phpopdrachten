<?php
/**
 * User: Stijn Verhoeven
 * Date: 29-03-2020
 * Time: 11:33
 * File: Opdracht5.1.php
 */
?>
<?php
include "includes/header.php";
?>
    <h1>RESTARIA KEES KROKET</h1>
    <br>
    <br>
    <p>Visstraat 12</p>
    <p>5211 DN 's-Hertogenbosch</p>
    <p>073 613 6720</p>
    <p>info@restariakeeskroket.nl</p>

    <form action="form_data.php" method="get">
    <label>Bedrijfsnaam</label>
    <input name="Bedrijfsnaam" type="text"><br>

    <label>Voornaam</label>
    <input name="Voornaam" type="text"><br>

    <label>Achternaam</label>
    <input name="Achternaam" type="text"><br>

    <label>Telefoon</label>
    <input name="Telefoon" type="number"><br>

    <label>E-mail</label>
    <input name="E-mail" type="email"><br>

    <label>Bericht</label>
    <input name="Bericht" type="text"><br>
    <input type="submit" name="verzenden" value="verzenden">
    </form>
<?php
include "includes/footer.php";
?>