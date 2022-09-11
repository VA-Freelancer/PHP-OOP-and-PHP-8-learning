<?php error_reporting(-1);
session_start();
$login = "admin";
$password = '$2y$10$EXdlnV2pLKkPw.Xt8QHltuulisY2HCRblBbrZx11IGb6YrQydCIru';
if(!empty($_POST)){
    if($_POST['login'] == $login && password_verify($_POST['password'], $password)){
        $_SESSION['auth'] = 1;
        $_SESSION['res'] = 'Success';
        header("Location: secret.php");
        die;
    }else{
        $_SESSION['res'] = 'Error';
        header("Location: index.php");
        die;
    }
}
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
        <li><a href="secret.php">Secret page</a></li>
    </ul>
    <h3>Эту страницу может видеть любой пользователь</h3>
    <?php if(isset($_SESSION['res'])){
        echo $_SESSION['res'];
        unset($_SESSION['res']);
    }?>
    <?php if (!empty($_SESSION['auth'])): ?>
        <a href="?do=logout">Logout</a>
    <?php else: ?>
        <form method="post">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login">
            <label for="password">Password:</label>
            <input type="password" name="password" id="login">
            <button type="submit">Login</button>
        </form>
    <?php endif;?>
</body>
</html>