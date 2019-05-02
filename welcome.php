<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to the site.</h1>
        <p>You can make a blog or  simple static website......</p>
    </div>
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Explore</h1>
    <p class="lead">Love to explore Code........................</p>
  </div>
</div></div>
    <p>
        <a href="reset-password.php" class="btn btn-primary">Reset Your Password</a>
        <a href="logout.php" class="btn btn-success">Sign Out of Your Account</a>
    </p>
</body>
</html>