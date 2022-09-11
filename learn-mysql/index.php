<?php error_reporting(-1);

function debug($data)
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$db = mysqli_connect('localhost', 'vproger', 'sAMogyg6.', 'world') or die('Error connection');
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$res = mysqli_query($db, "SELECT Code, Name FROM country LIMIT 10");
// debug(mysqli_fetch_all($res, MYSQLI_ASSOC));
// debug(mysqli_fetch_assoc($res));
// while($row = mysqli_fetch_assoc($res)){
//     echo "Код страны: {$row['Code']} / Страна: {$row['Name']}<br>";

// }
$name = "d'Artanian";
$name2 = "Иванов";
$age = 25;
// // $name = mysqli_real_escape_string($db, $name);

// $query = sprintf( "INSERT INTO test (name, age) VALUES ('%s', %d)",
//         mysqli_real_escape_string($db, $name),
//         (int)$age          
//     );

// var_dump(mysqli_query($db, $query));

// $query = sprintf( "UPDATE test SET name = '%s', age =  %d WHERE id = 1",
//     mysqli_real_escape_string($db, $name2),
//     (int)$age );

// var_dump(mysqli_query($db, $query));

// var_dump(mysqli_query($db, "DELETE FROM test WHERE id = 3"));