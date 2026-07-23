<?php
/*
//sort,rsort,asort,ksort,arsort,krsort

$marks=array(100,90,89,98,78);
rsort($marks);
foreach($marks as $mark)
{
 echo $mark."<br>";
}*/

$profile=array("name"=>"29","age"=>"21","city"=>"31");
echo "Before Sorting:";
print_r($profile);
sort($profile);
echo "After Sorting:";
print_r($profile);



?>
