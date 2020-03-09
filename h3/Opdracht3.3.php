<?php
include "../includes/variablelen.php";

include "../includes/header.php";
?>
<body>

<p>
    <a href="../index.php">Terug</a>
</p>
<?php
    if($uur > 0 && $uur <=5)
    {
        echo "Goedennacht";
    }
    else if ($uur > 5 && $uur<=12)
    {
        echo "Goedeochtend";
    }
    else if ($uur > 12 && $uur <=17)
    {
        echo "Goedenmiddag";
    }
    else if ($uur > 17 && $uur <=24)
    {
        echo "Goedenavond";
    }
?>
<?php
include "../includes/footer.php";

