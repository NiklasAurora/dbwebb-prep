<?php

function connectToDatabase($dsn) {
    try {
        $db = new PDO($dsn);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo ("Something went wrong with DSN: $dsn");
        throw $e;
    }

    return $db;
}

function getOne($db, $stmt, $params = []) {
    $stmt = $db->prepare($stmt);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getAll($db, $stmt, $params = []) {
    $stmt = $db->prepare($stmt);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
