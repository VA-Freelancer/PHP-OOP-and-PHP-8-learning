<?php error_reporting(-1);

function view_time(){
    $min = 60;
    $time_hours = $min * 60 ;
    $time_day = $time_hours * 24;
    $time_custom = $time_day *  7;
    echo "Кол-во сек в: <br> в часе - {$time_hours}<br> в сутках - {$time_day}<br> в неделе - {$time_custom}<br>";
}
view_time();
$x = 60;
echo "<br>Кол-во сек в: "; 
echo "<br>В часе - " . $x *= 60;
echo "<br>В сутках - " . $x *= 24;
echo "<br>В неделе - " . $x *=  7;