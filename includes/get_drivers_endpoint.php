<?php

if (!isset($_POST['submit'])) {
    header("Location: /index.php");
    exit;
}

require_once("functions.php");

$pdo = connect_db(); # connecting to the data base

$stmt = $pdo->prepare("SELECT * FROM testkerowcy1 WHERE ID = 2");
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    echo "ID: " . $result['ID'] . "\n";
    echo "Name: " . $result['Name'] . "\n";
    echo "Surname: " . $result['Surname'] . "\n"; 
    echo "Height: " . $result['height'] . "\n";
} else {
    echo "No driver found.";
}