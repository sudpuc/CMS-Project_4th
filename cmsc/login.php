<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Sanitize the user input to prevent SQL injection attacks
  $email = mysqli_real_escape_string($conn, $email);
  $password = mysqli_real_escape_string($conn, $password);

  // Query the database to check if the user exists and their credentials match
  $query = "SELECT * FROM users WHERE email='$email' AND password=md5('$password')";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
    // The user exists and their credentials match
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['role'] = $row['role'];

    // Redirect the user to the appropriate dashboard based on their role
    if ($row['role'] == 'admin') {
      header("Location: dashboards/admindash.php");
      exit();
    } elseif ($row['role'] == 'conference_admin') {
      header("Location: dashboards/condash.php");
      exit();
    } elseif ($row['role'] == 'author') {
      header("Location: dashboards/authordash.php");
      exit();
    } elseif ($row['role'] == 'reviewer') {
      header("Location: dashboards/reviewdash.php");
      exit();
    }
  } else {
    // The user does not exist or their credentials do not match
    $error = "Invalid email or password.";
  }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" id="">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="">
                </div>
                
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                </div>
                <p>Dont have an account? <a href="reg.php">Register here</a>.</p>
            </form>
        </div>

    </div>
</body>
<?php

// Your login code here to authenticate the user and get their role from the database
