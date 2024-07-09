<?php
    include "..\src\connection.php";
    session_start();

    $username = $_SESSION['username'];
    $note = $_POST['note'];
    $query = "INSERT INTO todos SET username='$username', note='$note';";
    $statement = mysqli_query($connect, $query);
    mysqli_close($connect);

    header('location:..\index.php');
