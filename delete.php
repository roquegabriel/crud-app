<?php

require __DIR__ . '/conn.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = $conn->prepare("DELETE FROM task WHERE id=:id");
    $delete->execute([
        ':id' => $id
    ]);
    header("location:index.php");
    exit;
}
