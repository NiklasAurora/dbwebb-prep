<?php

/**
 * A processing page that does a redirect.
 */
if ($_POST["create"] ?? false) {
    // Do some processing of the form data
    // for example write to the database.
}

$url = __DIR__ . "/sessionpage.php?page=post-result";

die($url);

header("Location: result.php");


