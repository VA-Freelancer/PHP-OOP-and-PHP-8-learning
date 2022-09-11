<?php error_reporting(-1);

function str_count(string $str, string $substr): ?int
{
    if(empty($substr)) return null;
    $cnt_char = mb_strlen($substr);
    $str = mb_str_split($str);
    $cnt = 0;
    foreach ($str as $key => $val):
        if($cnt_char == 1):
            if($val == $substr) $cnt++;
        endif;

        if($cnt_char > 1):
            $chars = '';
            for($i =  0; $i < $cnt_char; $i++):
                if(isset($str[$key+$i])){
                    $chars .= $str[$key+$i];
                }
            endfor;
            if($chars == $substr) $cnt++;  
        endif;
        
    endforeach;
    return $cnt;
}
function str_count2(string $str, string $substr): int
{
    return mb_substr_count($str, $substr);
}
function no_space(string $str, string $substr): string
{
    $i = 0;
    $str_new = '';
    while(isset($str[$i]) ):
        if($str[$i] != $substr) $str_new .= $str[$i];

        $i++;
    endwhile;
    return $str_new;
}
function no_space2(string $str, string $substr = ' '):string
{
    return str_replace($substr, '', $str);
}


function max_number(int $num):int
{
    $num_max = mb_str_split( $num);
    rsort($num_max);
    return (int) implode('' , $num_max);
}
var_dump(max_number(6598646));
// echo max_number(123);

echo str_count2('hello', 'he');