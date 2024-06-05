<?php

require __DIR__ . '/inc/header.php';
require __DIR__ . '/conn.php';

$data = $conn->query("SELECT * FROM task ORDER BY id DESC;");

?>

<div class="row justify-content-center">
    <div class="col-md-10">
        <form action="/insert.php" method="post">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <input type="text" name="task" class="form-control" placeholder="Enter a task" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col" class="col-2">#</th>
                    <th scope="col" class="col-8">Task name</th>
                    <th scope="col" class="col-2 text-center" colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $data->fetch(PDO::FETCH_OBJ)) : ?>
                    <tr>
                        <th scope="row"><?php echo $row->id; ?></th>
                        <td><?php echo $row->name; ?></td>
                        <td><a class="btn btn-danger btn-sm" href="/delete.php?id=<?php echo $row->id; ?>" role="button">Delete</a></td>
                        <td><a class="btn btn-success btn-sm" href="/update.php?id=<?php echo $row->id; ?>" role="button">Update</a></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require __DIR__ . '/inc/footer.php'; ?>