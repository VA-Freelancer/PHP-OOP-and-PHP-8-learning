<?php error_reporting(-1);


function test(){
    static $a = 0;
    echo $a;
    $a++;
}


$name = '';

function testing(string $a): ?string
{
    if($a) {
        return 'Test';
    }

    return null;
}
// var_dump(testing($name));


function sum(int $term1, int $term2 = 1, int $factor = 2): int
{
    return ($term1 + $term2) * $factor;
} 

echo sum(1, factor: 3);