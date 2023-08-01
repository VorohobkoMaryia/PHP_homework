<?php

$str = 'я люблю обучаться PHP';
echo mb_strtoupper($str, 'utf-8');
echo "<br>";
function replace_word($text,$word){
    return str_replace("PHP", $word, $text);
}
echo replace_word($str,"C++");
echo "<br>";
function word_counter($text)
{
    $words = explode(' ', $text);
    return count($words);
}
echo word_counter($str);
echo"<br>";
echo mb_strlen($str, 'utf-8');
?>