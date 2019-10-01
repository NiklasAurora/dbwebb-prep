<?php

$filename = __DIR__ . "/db/db.sqlite";
$dsn = "sqlite:$filename";

try {
    $db = new PDO($dsn);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo ("Something went wrong with DSN: $dsn");
    throw $e;
}

// Hämta allt från fruits, sen ställ frågan
$stmt = $db->prepare("SELECT * FROM fruits");
$stmt->execute();

// Key value array, kmom04 labb
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print("<pre>");
// print_r($result);
// print("</pre>");

$rows = "";

foreach ($result as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$row["id"]}</td>";
    $rows .= "<td>{$row["type"]}</td>";
    $rows .= "<td>{$row["color"]}</td>";
    $rows .= "<td>{$row["amount"]}</td>";
    $rows .= "</tr>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main class="content">
        <!-- Without database -->
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Color</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>1</td>
                <td>apple</td>
                <td>green</td>
                <td>100</td>
            </tr>
            <tr>
                <td>2</td>
                <td>orange</td>
                <td>orange</td>
                <td>75</td>
            </tr>
            <tr>
                <td>3</td>
                <td>coconut</td>
                <td>brown</td>
                <td>10</td>
            </tr>
            <tr>
                <td>4</td>
                <td>pear</td>
                <td>green</td>
                <td>25</td>
            </tr>
        </table>
        <!-- With prepared rows in PHP -->
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Color</th>
                <th>Amount</th>
            </tr>
            <?= $rows ?>
        </table>
        <!-- Foreach inline -->
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Color</th>
                <th>Amount</th>
            </tr>
            <?php foreach ($result as $key => $row) : ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["type"] ?></td>
                    <td><?= $row["color"] ?></td>
                    <td><?= $row["amount"] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>

<!--
INSERT INTO "fruits"("type","color", "amount") VALUES ("orange","orange", 75),
("coconut","brown", 10),
("pear", "green", 25);
SELECT * FROM fruits;
-->
