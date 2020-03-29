<?php
/**
 * User: Stijn Verhoeven
 * Date: 09-03-2020
 * Time: 15:15
 * File: Opdracht4.4.php
 */
?>
<?php
echo "<h1>Opdracht 4.4</h1>";
echo "<h3>Weekkalender komende week:</h3>";
$DagenWeek = array("zondag","maandag","dinsdag","woensdag","donderdag","vrijdag","zaterdag");
$test = "";
for($v=0; $v <8; $v++) {
    $dagnr = date('w', strtotime("+$v days"));
    $eendatum = date('d-m-Y', strtotime("+$v days"));
    $test .= "Vandaag is het $dagnr is {$DagenWeek[$dagnr]} $eendatum <br>";
}
echo $test
?>
<?php
include "../Include/footer.php"
?>