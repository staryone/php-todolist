<?php
    include "..\src\connection.php";

    $id_note = $_POST['id_note'];
    $note = $_POST['note'];
    $query = "UPDATE todos SET note='$note' WHERE id='$id_note';";
    $statement = mysqli_query($connect, $query);
    mysqli_close($connect);

    header('location:..\index.php');