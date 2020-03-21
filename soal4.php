<?php

$x=3;

for ($i = 1; ; $i++) {
    if ($i > $x) {
        break;
    }
	echo $randomNum = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 32);
    echo "<br>";
}

?>