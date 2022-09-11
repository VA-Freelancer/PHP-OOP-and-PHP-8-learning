<?php error_reporting(-1);

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,];

$goods = [
    [
        'title' => 'Nokia',
        'price' => '100',
        'qty' => '10',
    ],
    [
        'title' => 'Sony',
        'price' => '120',
        'qty' => '7',
    ],
    [
        'title' => 'LG',
        'price' => '105',
        'qty' => '10',
    ]
    
];
function get_count(array $arr = []) : ?int
{   
    if(empty($arr)) return null;
    foreach( $arr as $key => $val ){
        $arr_count =  $key+1;
    }
    
    return $arr_count;
}
function get_count2(array $arr = []) : ?int
{   
    if(empty($arr)) return null;
    $cnt = 0;
    foreach( $arr as  $val ){
        $cnt += 1;
    }
    return $cnt;
}
function get_count3(array $arr = []) : ?int
{   
    if(empty($arr)) return null;
    $i = 0;
    while(isset($arr[$i]) ){
        $i++;
        $arr_count = $i;
    }

    return $arr_count;
}

echo get_count($arr);
echo "<br>";
echo get_count2($arr);
echo "<br>";
echo get_count3($arr);
echo "<br><br>";
echo get_count($goods);
echo "<br>";
echo get_count2($goods);
echo "<br>";
echo get_count3($goods);
function table_multiplication(int $x, int $y)
{
    $num = $x;
    echo "<caption>Таблица умножения</caption>";
    echo "<tr>";
    
    while($num < 10){
        $num2 = $y;
        echo "<td>";
        while($num2 < 10){
            
            echo "<span>{$num} * {$num2} = " . $num * $num2 . "</span>\n";
            
            $num2++;
        }
        echo "</td>";
        
        $num++;
    }
    echo "</tr>";
}

function het_table_multiplication2(int $x, int $y): string
{
    $table = "<table>";
    $table .= "<caption>Таблица умножения</caption>";
    $table .= "<tr>";
    for($num = 1; $num <= $x; $num++){
        $table .= "<td>";
            for($num2 = 1; $num2 <= $y; $num2++){
                $table .=  "<span>{$num} * {$num2} = " . $num * $num2 . "</span>";
            }
        $table .=  "</td>";
    }
    $table .=  "</tr>";
    $table .=  "</table>";
    $table .=  "
                <style>
                    table{
                        border-spacing: 0;
                    }
                    td{
                        
                        border: 1px solid #333;
                    }
                    td span{
                        display: block;
                        padding: 5px;
                    }
                    td:nth-child(odd) {
                    background-color: #663613;
                    color: #fff;
                    }
                </style>
            ";
    return $table;
}

?>
<table>
<?php
table_multiplication(9, 1);
?>
</table>
<?php echo het_table_multiplication2(15, 20);