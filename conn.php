<?php

try {

    $host = "localhost";
    $dbname = "todo";
    $user = "root";
    $password = "1986";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}