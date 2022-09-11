<?php error_reporting(-1); ?>
<select name="year" id="year">
    <?php
        for($year = 1900; $year <= 2021;  $year++){
            if($year % 2){
                continue;
            }
            echo "<option value='{$year}'>{$year}</option>";
        
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
        echo "<tr>";
            for($num = 2; $num <= 9; $num++){
                echo "<td>";
                    for($num2 = 1; $num2 <= 9; $num2++){
                        echo "<span>{$num} * {$num2} = " . $num * $num2 . "</span>";
                    }
                echo "</td>";
            }
        echo "</tr>";
    ?>
</table>