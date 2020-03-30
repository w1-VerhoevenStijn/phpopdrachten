<?php
/**
 * User: Stijn Verhoeven
 * Date: 29-03-2020
 * Time: 17:10
 * File: Opdracht5.2.php
 */
?>

<?php
include "includes/header.php";
?>
    <form action="uitschrijving.php" method="get">
    <h1>Uitschrijfformulier Koning Willem 1 College</h1>
    <hr>
        <label>Voor en achternaam</label>
        <input name="Voor-Achternaam" type="text"><br>

        <label>Studentennummer</label>
        <input name="Studentennummer" type=number><br>

        <label>Datum van uitschrijving</label>
        <input name="DatumUitschrijving" type="text"><br>

        <label>Reden van uitschrijving</label>
        <select name="Reden">
            <option value="Saai">Saai</option>
            <option value="Veel huiswerk">Veel huiswerk</option>
            <option value="Kut docenten">Kut docenten</option>
            <option value="ik ga naar een andere opleiding">Naar een andere opleiding</option>
        </select><br>

        <label>Leerjaar</label><br>
        <input name="Leerjaar" type="radio" value="leerjaar 1">1e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="leerjaar 2">2e leerjaar</input><br>
        <input name="Leerjaar" type="radio" value="leerjaar 3">3e leerjaar</input><br>

        <input name="succesklas" type="checkbox" value="ja">Ik wil me aanmeldden bij de succesklas<br>
        <input name="Verwijder" type="checkbox" value="ja">Verwijder mijn gegevens uit het systeem<br>
        <label>Geef hieronder de reden van je uitschrijving op</label><br>
        <input name="Bericht" type="text"><br>

        <input type="submit" name="verzenden" value="verzenden">
    </form>
<?php
include "includes/footer.php";
?>