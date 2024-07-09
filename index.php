<?php
    include __DIR__ . "\src\auth.php";
    require_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist with SQL</title>
</head>
<body>
    <h1>Hello World</h1>
    <button><a href="logout.php">Logout</a></button>
</body>
</html>