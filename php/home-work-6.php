<?php error_reporting(-1);


$num = [1, 2, 3, 1, 4, 5,  3, 2, 6, 7, 7, 8, 8, 9, 2, 5,];

function user_count(array $arr): int
{
    $cnt = 0;
    foreach ($arr as $value) {

        $cnt++;
    }
    return $cnt;
}
function user_count2(array $arr): int
{
    $cnt = 0;
    foreach ($arr as $key => $value) {
        $cnt = $key + 1;
    }
    return $cnt;
}
function user_sum(array $arr): int
{
    $cnt = 0;
    foreach ($arr as $value) {
        $cnt += $value;
    }
    return $cnt;
}
function user_range(int $start, int $end): array
{
    $arr = [];
    for($cnt = ($start - 1 ); $cnt <  $end; $cnt++) {
        $arr[$cnt] = ($cnt + 1);
    }
    return $arr;
}
print_r(count($num ));
echo "<br>";
print_r(user_count($num ));
echo "<br>";

print_r(user_count2($num ));
print_r(user_sum($num ));
print_r(array_sum($num ));
echo "<pre>" . print_r(range(1, 100 ), true) . "</pre>";
echo "<pre>" . print_r(user_range(1, 100 ), true) . "</pre>";
