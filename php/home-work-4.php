<?php error_reporting(-1);


$num = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

for($i=0;$i<count($num);$i++){
    if($num[$i]%2) continue;

    echo $num[$i] ."<br>";
}
echo '<br><br>';
for($i=0;$i<count($num);$i++){
    if(!($num[$i]%2)) echo $num[$i] ."<br>"; 
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

echo '<br><br>';
echo '<pre>' . print_r($goods, true) . '</pre>';
for($i = 0; $i<count($goods);$i++){
    $goods[$i]['price'] =  $goods[$i]['price'] < 120 ? $goods[$i]['price'] += 15 : $goods[$i]['price'];
    
    
}
echo '<pre>' . print_r($goods, true) . '</pre>';

echo '<br><br>';


$goods2 = [
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


echo '<pre>' . print_r($goods2, true) . '</pre>';
foreach ($goods2 as &$value) {
    if($value['price'] < 120)  $value['price']  += 15;
}

echo '<pre>' . print_r($goods2, true) . '</pre>';