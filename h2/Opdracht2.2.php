<?php
/**
 * User: Stijn Verhoeven
 * Date: 12-02-2020
 * Time: 10:53
 * File: index.php
 */
?>
<?php
$txt1 ="Hallo ";
$txt2 =" een makkelijke taal";
$txt3 =" toch zo'n makkelijke taal";
$txt4 =" wat is";
$txt5 =" PHP";
$txt6 ="nooit gedacht dat";
$txt7 ="De installatie is best ingewikkeld";
$txt8 =" Fijn ";
$txt9 ="?";
$txt10 =".";
$txt11 =",";
$txt12 ="<br>";
$txt13 =" is";
$txt14 ="Vind je toch niet ";
$txt15 =" toch";

?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <h1>Opdracht 2.2</h1>
        <p>
            <a href="../index.php">Terug</a>
        </p>
        <p>
            <?php
                echo $txt1 .$txt11. "wat is". $txt5. $txt2. $txt10.$txt12. $txt7 .$txt10. $txt8. $txt15 .$txt9.$txt12 .$txt6.$txt5.$txt15.$txt3." is".$txt10
            ?>
        </p>
    </body>
</html>