<?php

if (!isset($_POST['submit'])) {
    header("Location: /index.php");
    echo "exited";
    exit;
}
# this is a function which connects to the database 
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

function get_driver_by_id($id) {
    $pdo = connect_db();
    $stmt = $pdo->prepare("SELECT * FROM test WHERE ID = ?");
    $stmt->execute([$id]);
    $pdo = null; # "disconnect" from db, not really necessary, but it's kinda a good practice do do it.
    return $stmt->fetch(PDO::FETCH_ASSOC);
}