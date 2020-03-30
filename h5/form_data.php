<?php
/**
 * User: Stijn Verhoeven
 * Date: 29-03-2020
 * Time: 11:33
 * File: form_data.php
 */
?>
<?php
include "includes/header.php";
?>
<body>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse:collapse;
        }
    </style>
    <h1>
        Wat u heeft ingevult
    </h1>
    <table>
        <tr>
            <th>Bedrijfsnaam:</th>
            <td><?php echo $_GET["Bedrijfsnaam"]; ?></td>
        </tr>
        <tr>
            <th>Voornaam:</th>
            <td><?php echo $_GET["Voornaam"]; ?></td>
        </tr>
        <tr>
            <th>Achternaam:</th>
            <td><?php echo $_GET["Achternaam"]; ?></td>
        </tr>
        <tr>
            <th>Telefoon:</th>
            <td><?php echo $_GET["Telefoon"]; ?></td>
        </tr>
        <tr>
            <th>E-mail:</th>
            <td><?php echo $_GET["E-mail"]; ?></td>
        </tr>
        <tr>
            <th>Bericht:</th>
            <td><?php echo $_GET["Bericht"]; ?></td>
        </tr>
    </table>
<?php
include "includes/footer.php"
?>