<?php
    include __DIR__ . "\src\auth_register.php";
    if(isset($_SESSION['alert'])){
        echo "<div class='alert alert-danger' role='alert'>
                    Username sudah terdaftar! </div>";
        unset($_SESSION['alert']);
    } else if(isset($_SESSION['success'])){
        echo "<div class='alert alert-success' role='alert'>
                    Username sudah terdaftar! </div>";
        unset($_SESSION['alert']);
    }

    if(is_name_already($_POST['username']) == 1){
        $_SESSION['alert'] = 1;
        header('location:register.php');
    }

    if(isset($_POST['username']) && isset($_POST['password']) && !is_user_login()){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(register($username, $password)){
            $_SESSION['success'] = 1;
            header('location:register.php');
        } else {
            $_SESSION['alert'] = 1;
            header('location:register.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Todolist</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5" style="color: dodgerblue;">Register Todolist</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button class="btn"><a href="register.php">Login</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>