<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>User Registration</h2>

    <div class="mb-2">
      <label for="">task Name</label>
      <input name="task_name" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task Name</label>
      <input name="task_description" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task statue</label>
      <input name="task_status" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">task due</label>
      <input name="task_due" type="ptext" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>