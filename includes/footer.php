<?php
if ($uur > 0 && $uur <= 5) {
    $greeting =  "Goedennacht";
} else if ($uur > 5 && $uur <= 12) {
    $greeting = "Goedeochtend";
} else if ($uur > 12 && $uur <= 17) {
    $greeting = "Goedenmiddag";
} else if ($uur > 17 && $uur <= 24) {
    $greeting = "Goedenavond";
}

session_start();
if (isset($_SESSION['username'])) {
    $bezoeker = $_SESSION['username'] . "&nbsp;<a
href='../h6/loguit.php'>Loguit</a>";
} else {
    $bezoeker = "onbekende bezoeker" . "&nbsp;<a
href='../h6/opdracht6.1.php'>Login</a>";
}


echo '<footer class="footer">';
echo $bezoeker;
echo $year;
echo ' ';
echo $greeting;
echo '</footer>';
echo '</body></html>';
?>