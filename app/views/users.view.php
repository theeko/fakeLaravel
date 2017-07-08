<?php include "app/views/partials/header.php"; ?>
  <p>Users Page</p>

  <form action="/users" method="POST">
    <input type="text" name="name" />
    <button type="submit" >Submit</button>
  </form>

  <?php foreach($users as $user): ?>

    <p><?php echo $user->name; ?></p>
  <?php endforeach; ?>


<?php include "app/views/partials/footer.php"; ?>
