<?php

declare(strict_types=1);

check_login_errors()
{
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>"
        

        unset($_SESSION["errors_login"]);

    }

}