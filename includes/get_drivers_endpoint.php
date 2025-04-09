<?php

if (!isset($_POST['submit'])) {
    header("Location: /index.php");
    echo "exited";
    exit;
}

require_once("functions.php");


$id = $_POST['id'] ?? null;
echo "got id " . $id . "\n";
if (!$id || !is_numeric($id)) {
    echo "Invalid or missing driver ID.";
    exit;
}


 # retruns array representing 1 entrance of the table, accessed by the key
$driver = get_driver_by_id($id); 

# this is just to check whether is it working or not, can be deleted
if ($driver) {
    echo "ID: " . $driver['ID'] . "\n";
    echo "Name: " . $driver['Name'] . "\n";
    echo "Surname: " . $driver['Surname'] . "\n";
    echo "Height: " . $driver['height'] . "\n";
} else {
    echo "no driver found.";
}