<?php
$count=0;
function calculate_count()
{
global $count;
echo $count++."<br/>";

}
calculate_count();
echo $count;
?>