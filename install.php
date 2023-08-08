<?php
header("Content-type: text/html; charset=utf-8");
$arr = array(
    array(
        'type_name'=>'Категория1',
        'brand_name'=>'Бренд2',
        'item_name'=>'Название1',
        'description'=>'Описание1',
        'price1'=>231.0,
        'price2'=>233.0,
        'available'=>'В наличии'
    ),
    array(
        'type_name'=>'Категория2',
        'brand_name'=>'Бренд2',
        'item_name'=>'Название2',
        'description'=>'Описание2',
        'price1'=>22.0,
        'price2'=>25.0,
        'available'=>'Ожидается'
    ),
    array(
        'type_name'=>'Категория1',
        'brand_name'=>'Бренд3',
        'item_name'=>'Название3',
        'description'=>'Описание3',
        'price1'=>412.0,
        'price2'=>415.0,
        'available'=>'В наличии'
    ),
    array(
        'type_name'=>'Категория1',
        'brand_name'=>'Бренд3',
        'item_name'=>'Название4',
        'description'=>'Описание4',
        'price1'=>221.0,
        'price2'=>225.0,
        'available'=>'В наличии'
    ),
    array(
        'type_name'=>'Категория1',
        'brand_name'=>'Бренд1',
        'item_name'=>'Название5',
        'description'=>'Описание5',
        'price1'=>543.0,
        'price2'=>545.0,
        'available'=>'Ожидается'
    ),
    array(
        'type_name'=>'Категория2',
        'brand_name'=>'Бренд1',
        'item_name'=>'Название6',
        'description'=>'Описание6',
        'price1'=>43.0,
        'price2'=>45.0,
        'available'=>'В наличии'
    )
);
 
$group=array();
foreach($arr as $val){//$val - тот же $row = mysql_fetch_array($query)
    $group[$val['type_name']][$val['brand_name']][]=$val;
}
 
ksort($group);
 
echo '<ul>',"\n";
foreach($group as $key1=>&$val1){
    ksort($val1);
    echo '<li>',$key1,"\n";
    echo '<ul>',"\n";
    foreach($val1 as $key2=>$val2){
        echo '<li>',$key2,"\n";
        echo '<ul>',"\n";
        foreach($val2 as $val3){
            echo sprintf('<li>%s | %s | %0.2F | %0.2F | %s</li>%s',
              $val3['item_name'],$val3['description'],$val3['price1'],$val3['price2'],$val3['available'],"\n");
            //Название5 | Описание5 | 543.00 | 545.00 | Ожидается
        }
        echo '</ul>',"\n";
        echo '</li>',"\n";
    }
    echo '</ul>',"\n";
    echo '</li>',"\n";
}
echo '</ul>'; 