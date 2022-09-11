<?php error_reporting(-1);

session_start();

if(!empty($_SESSION['count'])){
    echo "Вы посетили страницу learn-session {$_SESSION['count']} раз(а)";
}
?>

<a href="/learn-session.php">learn-session.php</a>