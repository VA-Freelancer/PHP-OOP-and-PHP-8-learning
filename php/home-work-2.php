<?php error_reporting(-1);

$year = 1900;
?>
<select name="year" id="year">
<?php
while($year <= 2021){
    echo "<option value='{$year}'>{$year}</option>";
    $year++;
}
?>
</select>
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
<table>
    
<caption>Таблица умножения</caption>

<?php
$num = 2;
echo "<tr>";

while($num <= 9){
    $num2 = 1;
    echo "<td>";
    while($num2 <= 9){
        
        echo "<span>{$num} * {$num2} = " . $num * $num2 . "</span>";
        
        $num2++;
    }
    echo "</td>";
    
    $num++;
}
echo "</tr>";
?>
</table>