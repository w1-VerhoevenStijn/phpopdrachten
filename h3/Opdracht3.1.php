<?php
/**
 * User: Stijn Verhoeven
 * Date: 12-02-2020
 * Time: 10:53
 * File: index.php
 */
?>
<?php
    $evenement = " Elfstedentocht";
    $evenementfries = " Alvestêdetocht";
    $kilometer = 200;
    $tocht = " schaatstocht";
    $ijs = " natuurijs";
    $georganiseerddoor = " Koninklijke Vereniging De Friesche Elf Steden.";
    $plaats = "Leeuwarden";
    $provintie = "Friesland";
    $aantal = 15;
    $eerstekeer = 1909;
    $keer =  1;
    $verhaal = "De".$evenement." (Fries:".$evenementfries.") is een ".$kilometer." kilometer lange".$tocht." over ".$ijs." die wordt georganiseerd door de ".
    $georganiseerddoor." ".$plaats.", de hoofdstad van ".$provintie.", is start-en aankomstplaats. De ".$evenement." is inmiddels ".$aantal." maal verreden
    en werd voor het eerst in ".$eerstekeer." gereden en word maximaal ".$keer." keer per winter gehouden.";
    $verhaal2 =$verhaal;

?>
<!DOCTYPE html>
<html>
<head>

</head>
    <body>
    <h1>Opdracht 3.1</h1>
    <?php
        echo $verhaal;
        echo "<p>".$verhaal2."</p>"
    ?>
    <br>
    <br>
    <a href="../index.php">Terug</a>
    </body>
</html>
