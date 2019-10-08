<?php

include("./functions.php");
include("./config.php");

$db = connectToDatabase($dsn);

$stmt = "SELECT * FROM fruits";
$result = getAll($db, $stmt);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View all</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="index.php">View all fruits</a>
        <a href="create.php">Add new fruit</a>
    </nav>
    <main class="content">
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Color</th>
                <th>Amount</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($result as $key => $row) : ?>
                <tr>
                    <td><?= $row["id"] ?></td>
                    <td><?= $row["type"] ?></td>
                    <td><?= $row["color"] ?></td>
                    <td><?= $row["amount"] ?></td>
                    <td><a href="update.php?fruit=<?= $row['id'] ?>">&#x1F58A;</a></td>
                    <td><a href="delete.php?fruit=<?= $row['id'] ?>">&#x1F5D1;</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>
