<?php
include "connect.php"; // make sure connect.php has $con = mysqli_connect(...);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>CRUD Operation</title>
  </head>
  <body>
    <div class="container my-5">
      <form method="POST">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your Name" name="name" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="new-email">
        </div>

        <div class="form-group">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>

      <?php
      $id=$_GET['updateid'];
      if (isset($_POST['submit'])) {
          $name     = $_POST['name'];
          $email    = $_POST['email'];
          $mobile   = $_POST['mobile'];
          $password = $_POST['password'];

          // Insert query
          $sql = "update crud set id='$id',name='$name',email='$email'
          mobile='$mobile',password='$password'";
          $result = mysqli_query($cn, $sql); // ✅ use $con not $cn

          if ($result) {
              echo "Updated sucessfully";
          } else {
              echo "DB not connected";
          }
      }
      ?>
    </div>
  </body>
</html>
