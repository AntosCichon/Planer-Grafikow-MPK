<?php

if (!isset($_POST['submit'])) {
    header("Location: /index.php");
}

function connect_db(){
    $host = 'db';
    $dbname = 'planer';
    $user = 'user';
    $pass = 'pass';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
        return $pdo;
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["error" => "Database connection failed", "details" => $e->getMessage()]);
        exit;
    }
}