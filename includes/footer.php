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
echo '<footer class="footer">';
echo $name;
echo $year;
echo ' ';
echo $greeting;
echo '</footer>';
echo '</body></html>';
?>