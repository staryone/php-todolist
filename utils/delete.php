<?php
    include "..\src\connection.php";

    $id_todo = $_GET['id'];
    $query = "DELETE FROM todos WHERE id='$id_todo'";
    $statement = mysqli_query($connect, $query);
    mysqli_close($connect);

    header('location:..\index.php');
