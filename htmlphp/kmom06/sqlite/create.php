<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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
                <label for="type">Type: </label>
                <input type="text" name="type" id="type">
                <label for="color">Color: </label>
                <input type="text" name="color" id="color">
                <label for="Amount">Amount: </label>
                <input type="number" name="amount" id="amount">
                <button type="submit" name="action" value="Create">Create</button>
            </fieldset>
        </form>
    </main>
</body>

</html>
