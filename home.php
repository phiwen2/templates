<?php
// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="page-header">
            <h4>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h4>
        </div>
        <a href="includes/logout.inc.php" class="signout-btn">Sign Out of Your Account</a>
    </div>    
</body>
</html>