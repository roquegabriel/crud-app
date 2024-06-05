<?php

require __DIR__ . '/inc/header.php';

require __DIR__ . '/conn.php';

?>

<form action="" method="post">
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
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td><button type="button" class="btn btn-danger">Delete</button></td>
        </tr>
    </tbody>
</table>

<?php require __DIR__ . '/inc/footer.php'; ?>