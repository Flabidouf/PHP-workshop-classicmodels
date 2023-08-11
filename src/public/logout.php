<?php
declare(strict_types=1);

session_start();

unset($_SESSION['user']);


    http_response_code(302);
    header("location: index.php");

?> 