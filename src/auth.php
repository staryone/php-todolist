<?php
    include("connection.php");
    session_start();

    function login(string $username, string $password){
        global $connect;
        $query = "SELECT * FROM users WHERE 
                users.username LIKE '$username' AND users.password LIKE '$password';";
        $statement = mysqli_query($connect, $query);
        mysqli_close($connect);

        return $statement->num_rows;
    }

    function is_user_login(){
        return (isset($_SESSION['username']));
    }

    function require_login(){
        if(!is_user_login())
            header('location:login.php');
    }