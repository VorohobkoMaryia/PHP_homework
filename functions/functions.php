<?php

function finding_the_area_of_a_rectangle($sideA, $sideB){
    return $sideA*$sideB;
}
$areaRectangle=finding_the_area_of_a_rectangle(4,5);
echo $areaRectangle;
echo '</br>';

function days_in_month($month,$year){
    return date('t', mktime(0,0,0,$month,1,$year));
}
$days=days_in_month(2,2023);
echo $days;
echo '</br>';

$str = function($message){
    return $message;
};
$result=$str("Привет, я Маша");
echo $result;
echo '</br>';

function days_to_New_Year($year){
    $newYear=mktime(0,0,0,1,1,$year);
    $today=time();
    return ($newYear-$today)/60/60/24;
}
echo floor(days_to_New_Year(2024));
echo '</br>';

//вообще здесь ещё нужны проверки на корректность даты, но конкректно смотря этот урок, её сделать нельзя, поэтому не добавила
function days_between_dates($d1,$m1,$y1,$d2,$m2,$y2){
    return (abs(mktime(0,0,0,$m1,$d1,$y1)-mktime(0,0,0,$m2,$d2,$y2))/60/60/24);
}
echo floor(days_between_dates(12,12,2020,29,3,2023));



