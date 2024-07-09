<?php
    $connect = mysqli_connect('localhost', 'root', '', 'todolist');
    if(!$connect)
        exit('Gagal koneksi ke database...');