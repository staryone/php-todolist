<?php
    include __DIR__ . "\src\auth.php";
    require_login();

    unset($_SESSION['username']);
    session_destroy();
    header("location:login.php");