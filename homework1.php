<?php
$a= 1;
const ending = 100;
while ($a<ending) {
    $a++;
    if ($a%3==0)
        echo($a), PHP_EOL;

}
?>