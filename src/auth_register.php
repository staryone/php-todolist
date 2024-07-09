<?php
    include("connection.php");
    session_start();

    function is_username_already(string $username){
        global $connect;

        $query = "SELECT * FROM users WHERE 
                users.username LIKE '$username';";
        
        $statement = mysqli_query($connect, $query);
        return $statement->num_rows;
    }

    function register(string $username, string $password){
        global $connect;

        $query = "INSERT INTO users SET username='$username', password='$password';";
        $statement = mysqli_query($connect, $query);
        mysqli_close($connect);
        return $statement;
    }
