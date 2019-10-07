<?php

include("./functions.php");
include("./config.php");

$db = connectToDatabase($dsn);

$id = $_POST["id"] ?? null;
$type = $_POST["type"] ?? "";
$color = $_POST["color"] ?? "";
$amount = $_POST["amount"] ?? 0;
$action = $_POST["action"] ?? "";

if ($action == "Create") {
    $stmt = $db->prepare("INSERT INTO fruits (type, color, amount) VALUES (?, ?, ?)");
    $params = [$type, $color, $amount];
    $stmt->execute($params);
} else if ($action == "Update") {
    $stmt = $db->prepare("UPDATE fruits SET type = ?, color = ?, amount = ? WHERE id = ?");
    $params = [$type, $color, $amount, $id];
    $stmt->execute($params);
} else if ($action == "Delete") {
    $stmt = $db->prepare("DELETE FROM fruits WHERE id = ?");
    $params = [$id];
    $stmt->execute($params);
}

header("Location: index.php");
