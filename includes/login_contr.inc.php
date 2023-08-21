<?php

declare(strict_types=1);

function is_username_wrong(bool|array $result) 
{
   if (!result) {
    return true;
   } else {
    return false;
   }
}

function is_password_wrong(string $pwd, $hashedPwd) 
{
   if (!result) {
    return true;
   } else {
    return false;
   }
}