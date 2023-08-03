<?php
$str="Я люблю PHP";

echo preg_replace('/ /', '', $str);
echo "</br>";

echo preg_replace('/PHP/','C++', $str);
echo "</br>";

echo "Есть ли подстрока PHP: ";
echo preg_match('/PHP/', $str);
echo "</br>";

echo preg_replace('/люблю/', '', $str);