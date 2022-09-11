<?php error_reporting(-1);


session_start();

$_SESSION['test'] = 'TEST';
// var_dump($_SESSION);
// echo $_SESSION['test'];

$_SESSION['count'] =  isset($_SESSION['count']) ? ++$_SESSION['count'] : 1;
unset($_SESSION['test']);
?>
<a href="/learn-session-two.php">learn-session-two.php</a>
