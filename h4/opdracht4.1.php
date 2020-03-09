<?php
include "../includes/header.php";
include "../includes/variablelen.php";
?>
<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-y H:i");
echo "De datum en tijd hier in Nederland is:$vandaag ";
?>
<?php
include "../includes/footer.php";
?>
