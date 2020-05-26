<?php
?>

<?php
include "../includes/header.php";
include "../includes/variablelen.php";
?>
<style>
    img{
        width:200px;
    }
</style>

<form id="gameFrm" method="get" action="opdracht6.2.php">
    <div>
        <input type="radio"onchange="document.getElementById('gameFrm').submit();" name="keuze" value="steen">steen
        <img src="../img/Steen.png">
    </div>
    <div>
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="papier">papier
        <img src="../img/paper.png">
    </div>
    <div>
        <input type="radio" onchange="document.getElementById('gameFrm').submit();" name="keuze" value="schaar">schaar
        <img src="../img/Shears.png">
    </div>
</form>

<?php
if (isset($_SESSION['computer']) == false) {
    $_SESSION['computer'] = 0;
    $_SESSION['player'] = 0;
}

if (isset($_GET['keuze'])) {
    echo "Jij koos: <img src='../img/{$_GET['keuze']}.jpg'> {$_GET['keuze']} <br>";
    $persoonkeuze = $_GET['keuze'];

    $opties = array("steen","papier","schaar");
    $computerkeuzegetal = rand(0,2);
    $computerkeuze = $opties[$computerkeuzegetal];
    echo "De computer koos: <img src='../img/{$computerkeuze}.jpg'> $computerkeuze <br>";



    //schaar wint van papier
    if ($computerkeuze == 'schaar' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'schaar' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }
    //steen wint van schaar
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'schaar'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'schaar'){
        $_SESSION['player'] +=1;
    }
    //papier wint van steen
    elseif ($computerkeuze == 'steen' && $persoonkeuze == 'papier'){
        $_SESSION['computer'] +=1;
    }elseif ($persoonkeuze == 'steen' && $computerkeuze == 'papier'){
        $_SESSION['player'] +=1;
    }

}

echo 'De stand is: <br>';
echo $_SESSION['computer'] . ' voor de computer <br>';
echo $_SESSION['player'] . ' voor de jou <br>';

if($_SESSION['computer'] == 5){
    echo 'The winner is the computer';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);

}
elseif($_SESSION['player'] == 5){
    echo 'The winner is the player';

    unset($_SESSION['computer']);
    unset($_SESSION['player']);
}


?>
<?php
include "../includes/footer.php"
?>
