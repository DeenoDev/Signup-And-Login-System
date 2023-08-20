<?php

declare(strict_types=1);

function signup_inputs() {
        <input type="text" name="username" placeholder="Username" class="mb-3">
        <input type="password" name="pwd" placeholder="Password" class="mb-3">
        <input type="text" name="email" placeholder="E-mail" class="mb-3">
}

function check_signup_errors()
 {
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach($errors as $error) {
            echo '<p>' . $error . '</p>';
        }

        unset($_SESSION['errors_signup']);

    } else if(isset($_GET["signup"]) && $_GET["signup"] === "success"){
        echo '<br>';
        echo '<p>Signup success!</p>';
    }
}