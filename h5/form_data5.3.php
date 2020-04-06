<?php
/**
 * User: Stijn Verhoeven
 * Date: 05-04-2020
 * Time: 20:30
 * File: form_data5.3.php
 */
?>
<?php
include "includes/header.php";
?>
<body>
<div>
    <?php
    include "includes/functions.php";
    $kans1op = getKans1op();
    $vergelijking = vergelijkOorzaken($kans1op);
//Je kunt nu $vergelijking printen zodat het eruit ziet als het voorbeeld
    ?>
    <table>
        <tr>
            <th>Vraag</th>
            <th>Antwoord</th>
        </tr>
        <tr>
            <th>Naam</th>
            <td><?php echo $_POST["FirstLastName"]; ?></td>
        </tr>
        <tr>
            <th>Leeftijd</th>
            <td><?php echo $_POST["Age"]; ?></td>
        </tr>
        <tr>
            <th>Gemeente</th>
            <td><?php echo $_POST["Township"]; ?></td>
        </tr>
        <tr>
            <th>Inwoners</th>
            <td><?php echo $_POST["citizens"]; ?></td>
        </tr>
        <tr>
            <th>Aantal besmet</th>
            <td><?php echo $_POST["infected"]; ?></td>
        </tr>
        <tr>
            <th>Kennissen besmet</th>
            <td><?php echo $_POST["Question"]; ?></td>
        </tr>
        <tr>
            <th colspan="2">De kans is n realiteit groter omdat je via je eigen netwerk besmet kan raken.</th>
        </tr>
        <tr>
            <th>Kans per ontmoeting op besmetting</th>
            <td><?php echoKans(); ?>%</td>
        </tr>
        <tr>
            <th>Kans is 1 op</th>
            <td><?php echo $kans1op; ?>%</td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $vergelijking; ?>
            </td>
        </tr>
    </table>
    <?php
    include "includes/footer.php"
    ?>
</div>
</body>

