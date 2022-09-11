<h2>Match</h2>
<?php error_reporting(-1);


$i = 222;

$res = match($i){
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    default => 'default',
};
var_dump($res);
