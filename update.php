<?php

require __DIR__ . '/inc/header.php';
require __DIR__ . '/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $data = $conn->query("SELECT * FROM task WHERE id='$id'");
    $row = $data->fetch(PDO::FETCH_OBJ);
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];
    $id = $_POST['id'];
    $update = $conn->prepare("UPDATE task SET name=:name WHERE id=:id");
    $update->execute([
        ":name" => $task,
        ":id" => $id
    ]);

    header("location:index.php");
    exit;
}
?>

<form action="/update.php" method="post">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <input type="text" name="task" class="form-control" value="<?php echo $row->name; ?>">
            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>

<?php require __DIR__ . '/inc/footer.php';
