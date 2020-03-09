<?php
/**
 * User: Stijn Verhoeven
 * Date: 19-02-2020
 * Time: 10:53
 * File: index.php
 */
$trafficLightColor = "groen";
$ambulanceComing = false;

if($trafficLightColor== "groen"&& $ambulanceComing == false)
{
    echo("<p id='groen'>U mag doorrijden </p>");
}
else
{
    echo("<p id = rood>U moet stoppen</p>");
}

?>
</p>
<p>
    <?php
    $countryName = "België";
    $currentAge = 16;

    if($countryName == "België" && $currentAge >=16 )
    {
        echo "jij woont in België en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alleen zwakke alcohol drinken ";
    }
    else if($countryName == "België" && $currentAge >=18 )
    {
        echo "jij woont in België en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alle alcohol drinken ";
    }
    else if($countryName == "Bulgarije" && $currentAge >=18 )
    {
        echo "jij woont in België en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alle alcohol drinken ";
    }
    else if($countryName == "Cyprus" && $currentAge >=17 )
    {
        echo "jij woont in Cyprus en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alle alcohol drinken ";
    }
    else if($countryName == "Nederland" && $currentAge >=18 )
    {
        echo "jij woont in Nederland en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alle alcohol drinken ";
    }
    else if($countryName == "Zweden" && $currentAge >=18 )
    {
        echo "jij woont in Zweden en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alleen zwakke alcohol drinken";
    }
    else if($countryName == "Zweden" && $currentAge >=20 )
    {
        echo "jij woont in Zweden en je leeftijd is ".$currentAge;
        echo "<br>je mag hier alleen zwakke alcohol drinken";
    }
    else
    {
        echo "jij mag niet drinken";
    }
    ?>
</p>
</main>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
 <title>Opdracht 3.2</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>Opdracht 3.2</h1>

    <br>
    <br>
    <a href="../index.php">Terug</a>
    <footer>
        &copy;Stijn Verhoeven
    </footer>
</body>
</html>

