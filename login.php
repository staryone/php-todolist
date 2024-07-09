<?php
    include __DIR__ . "\src\auth.php";
    if($alert == 1){
        echo "<div class='alert alert-danger' role='alert'>
                    Username atau Password Salah! </div>";
    }
    
    $alert = 0;

    if(is_user_login())
        header('location:index.php');
 
    if(isset($_POST['username']) && isset($_POST['password']) && !is_user_login()){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(login($username, $password)){
            $_SESSION['username'] = $username;
            header('location:index.php');
        } else {
            $alert = 1;
            header('location:login.php');
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
        <h1 class="text-center mt-5" style="color: dodgerblue;">Login Todolist</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card" style="width: 30rem;">
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button class="btn"><a href="register.php">Register</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>