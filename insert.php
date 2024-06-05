
<?php

require __DIR__ . '/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['task'])) {

        $task = $_POST['task'];
        $insert = $conn->prepare("INSERT INTO task (name) VALUES(:name)");
        $insert->execute([
            ":name" => $task
        ]);
        header("location:index.php");
        exit;
    } else {
    }
}
