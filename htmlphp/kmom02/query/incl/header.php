<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/article.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Kursmoment 02 | <?= $title ?></title>
</head>
<body>
<nav class="navbar">
    <a class="<?= basename($_SERVER['REQUEST_URI']) == "media-query.php" ? "selected" : ""; ?>" href="media-query.php">Home</a>
    <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : ""; ?>" href="about.php">About</a>
    <!-- <a class="<?= basename($_SERVER['REQUEST_URI']) == "another-page.php" ? "selected" : ""; ?>" href="#">Another page</a> -->
</nav>
