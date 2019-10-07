<?php

include("./functions.php");
include("./config.php");

$id = $_GET["fruit"] ?? null;

$db = connectToDatabase($dsn);

$stmt = "SELECT * FROM fruits WHERE id = ?";
$params = [$id];
$result = getOne($db, $stmt, $params);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="index.php">View all fruits</a>
        <a href="create.php">Add new fruit</a>
    </nav>
    <main class="content">
        <form action="process.php" method="POST">
            <fieldset>
                <label for="id">ID: </label>
                <input type="number" name="id" id="id" value="<?= $result["id"] ?>" readonly>
                <label for="type">Type: </label>
                <input type="text" name="type" id="type" value="<?= $result["type"] ?>">
                <label for="color">Color: </label>
                <input type="text" name="color" id="color" value="<?= $result["color"] ?>">
                <label for="Amount">Amount: </label>
                <input type="number" name="amount" id="amount" value="<?= $result["amount"] ?>">
                <button type="submit" name="action" value="Update">Update</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
