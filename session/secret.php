<?php error_reporting(-1);
session_start();
if(isset($_GET['do']) && $_GET['do'] == 'logout'){
    unset($_SESSION['auth']);
    $_SESSION['res'] = 'Вы вышли';
    header("Location: index.php");
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="index.php">Index page</a></li>
    </ul>
    <?php if(isset($_SESSION['res'])){
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    }?>
    <?php if (!empty($_SESSION['auth'])): ?>
        <h3>Эту страницу может видеть только авторизованный пользователь</h3>
        <a href="?do=logout">Logout</a>
    <?php else: ?>
        <h3>Вы не авторизованны</h3>
    <?php endif;?>
</body>
</html>