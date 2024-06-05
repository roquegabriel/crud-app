<?php

require __DIR__ . '/inc/header.php';
require __DIR__ . '/conn.php';

$data = $conn->query("SELECT * FROM task");

?>

<form action="/insert.php" method="post">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <input type="text" name="task" class="form-control" placeholder="Enter a task">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
</form>
<table class="table mt-3">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Task name</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $data->fetch(PDO::FETCH_OBJ)) :?>
        <tr>
            <th scope="row"><?php echo $row->id; ?></th>
            <td><?php echo $row->name; ?></td>
            <td><a class="btn btn-danger btn-sm" href="#" role="button">Delete</a></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php require __DIR__ . '/inc/footer.php'; ?>