<?php
function counter()
{
    static $count = 0;
    echo $count . "<br>";
    $count++;
}

counter();
counter();
counter();
?>