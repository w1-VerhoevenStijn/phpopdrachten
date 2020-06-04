<table>
    <tr>
        <th>id</th>
        <th>joketext</th>
        <th>jokeclou</th>
        <th>jokedate</th>
    </tr>

<?php


try {
    $pdo = new PDO("odbc:odbc2sqlserver");
} catch (PDOException $e) {
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}

try {

    $sql = 'SELECT * FROM joke';

    $result = $pdo->query($sql);
} catch (PDOException $e) {
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}

$aJokes = array();

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

    $aJokes[] = $row;
}
foreach ($aJokes as $end) {
    echo "<tr>
            <td> " . $end['id'] . "</td>
            <td> " . $end['joketext'] . "</td>
            <td> " . $end['jokeclou'] . " </td>
            <td> " . $end['jokedate'] . "</td>
            </tr>";
}
?>
