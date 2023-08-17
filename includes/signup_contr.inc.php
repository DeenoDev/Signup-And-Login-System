<?php

declare(strict_types=1);

function is_input_empty($username, $pwd, $email) {
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
     
}

function is_email_invalid($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
     
}