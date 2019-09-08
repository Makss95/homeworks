<?php
$text = 'Privet kak dela';

Function nospace($space)
{
    $underline = [" " => "_"];
    return strtr($space, $underline);
}
$translit = nospace($text);
echo $translit;
?>