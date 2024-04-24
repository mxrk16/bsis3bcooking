<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete User</h2>

    <div class="mb-2">
      <label for="">task Name</label>
      <input name="task_name" disabled value="<?= $user->task_name ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task description</label>
      <input name="task_description" disabled value="<?= $user->task_description ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task status</label>
      <input name="task_status" disabled value="<?= $user->task_status ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task due</label>
      <input name="task_due" disabled value="<?= $user->task_due ?>" type="text" class="form-control">
    </div>

    <input type="hidden" value="<?= $user->id ?>" name="id">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>