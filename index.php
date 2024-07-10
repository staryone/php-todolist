<?php
    include __DIR__ . "\src\auth.php";
    include __DIR__ . "\src\connection.php";
    require_login();
    $id_note = -1;
    $note = "";

    if(isset($_GET['edit']) && isset($_GET['todo'])){
        $id_note = $_GET['edit'];
        $note = $_GET['todo'];
        unset($_GET['edit']);
        unset($_GET['todo']);
    }

    $username = $_SESSION['username'];

    $query = "SELECT todos.id, todos.note, todos.status FROM users 
        INNER JOIN todos ON users.username = todos.username 
        WHERE users.username LIKE '$username';";
        
    $statement = mysqli_query($connect, $query);
    $todos = mysqli_fetch_all($statement, MYSQLI_ASSOC);

    mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist with SQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="container">
            <h2 class="text-center mt-5">Selamat datang, <?php echo ucwords($username);?></h1>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <div class="card" style="width: 40rem; max-width:100%;">
                    <div class="card-body">
                        <form class="d-flex " action="<?php echo ($id_note!=-1) ? "utils/update.php" : "utils/insert.php"; ?>" method="POST">
                            <input type="hidden" name="id_note" value=<?php echo ($id_note!=-1) ? "$id_note" : ""; ?>>
                            <input type="text" name="note" class="form-control" placeholder="Apa kegiatanmu hari ini..." value="<?php echo $note; ?>">
                            <button type="submit" class="btn btn-primary ms-1"><?php echo ($id_note!=-1) ? "Update" : "Create"; ?></button>
                        </form>
                    </div>
                </div>
                <div class="card mt-2" style="width: 40rem; max-width:100%;">
                    <div class="card-body">
                        <h5>Todolist <?php echo ucwords($username) ?></h5>
                        <ul class="list-group">
                            <?php foreach ($todos as $todo): ?>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <input class="form-check-input me-1" type="checkbox"
                                        onclick="window.location.href = 'utils/update_status.php?status=<?php echo ($todo['status'] == 1) ? 0 : 1; ?>&id_note=<?php echo $todo['id'];?>'"
                                        <?php if($todo['status'] == 1) echo "checked"; ?>
                                    >
                                    <label class="form-check-label">
                                        <?php if($todo['status'] == 1) echo "<del>"; ?>
                                        <?php echo $todo['note']?>
                                        <?php if($todo['status'] == 1) echo "</del>"; ?>
                                    </label>
                                </div>
                                <div>
                                    <a href="index.php?edit=<?php echo $todo['id']?>&todo=<?php echo $todo['note']?>">Edit</a>
                                    <a style="color: red;" href="utils/delete.php?id=<?php echo $todo['id']?>" 
                                    onclick="return confirm('Apakah yakin ingin menghapus todo ini?')">Delete</a>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <a class="text-center" href="logout.php" style="color: red; text-decoration-line: underline;">Logout</a>            
            </div>
        </div>
    </div>
</body>
</html>