<?php 
error_reporting(-1);
//Среди натуральных чисел  n0 ,n1,...,nm найти число с максимальной  суммой делителей.   
$n = 0;
$nm = 1000;

$resvalue = 0;
$ressumm = 0;
for($i = $n; $i <= $nm; $i++){
    if(summdif($i) > $ressumm){
        $ressumm = summdif($i);
        $resvalue = $i;
    }
}

echo ("Число с максимальной  суммой делителей - {$resvalue}. Сумма = {$ressumm}");

function summdif($n){
    $res = 0;
    for($i = 1; $i <= $n; $i++){
        if($n % $i == 0){
            $res += $i;
        }
    }
    return $res;
}