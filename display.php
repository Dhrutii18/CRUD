<?php
include "connect.php";

$sql = "SELECT * FROM crud";
$result = mysqli_query($cn, $sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Display Users</title>
</head>
<body>
<div class="container my-5">
    <button class="btn btn-primary my-3">
        <a href="user.php" class="text-light">Add User</a>
    </button>
    <table class="table table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th>Sl no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Password</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id       = $row['id'];
                    $name     = $row['name'];
                    $email    = $row['email'];
                    $mobile   = $row['mobile'];
                    $password = $row['password'];

                    echo '<tr>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
                        <td>'.$password.'</td>
                        <td>
                            <a href="update.php?updateid='.$id.'" class="btn btn-primary">Update</a>
                            <a href="delete.php?deleteid='.$id.'" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>';
                }
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
