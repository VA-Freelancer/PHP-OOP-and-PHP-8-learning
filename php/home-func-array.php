<?php

function debug($date){
    echo "<pre>".print_r($date,true)."</pre>";
}


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
debug(count($goods, 1));