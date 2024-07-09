<?php
    include "..\src\connection.php";

    $id_note = $_GET['id_note'];
    $status = $_GET['status'];
    $query = "UPDATE todos SET status='$status' WHERE id='$id_note';";
    $statement = mysqli_query($connect, $query);
    mysqli_close($connect);

    header('location:..\index.php');