<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup & Login System</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css"> 
</head>
<body class="position-relative">

<div class="form-container position-absolute top-50 start-50 translate-middle vw-100 d-flex flex-column align-items-center">
    <h3 >Login</h3>
    
    <form action="includes/login.inc.php" method="post" class="d-flex flex-column mb-3 w-50 p-3 ">
        <input type="text" name="username" placeholder="Username" class="mb-3">
        <input type="password" name="pwd" placeholder="Password" class="mb-3">
        <button class="mb-3">Login</button>
        
    </form>

    <?php 
    check_login_errors();

    ?>
    
    <h3 >Signup</h3>
    
    <form action="includes/signup.inc.php" method="post" class="d-flex flex-column mb-3 w-50 p-3 ">
        <?php 
        signup_inputs();
        ?>
        <button class="">Signup</button>
    
    </form>

    <?php
    check_signup_errors();
    ?>
    
</div>
    
</body>
</html>