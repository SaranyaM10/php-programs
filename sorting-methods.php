<?php

echo"<h2>Sorting Methods in PHP</h2>";

echo "<h3>1.sort() method</h3>";
$marks = array(100,90,98,95,99);
echo"<h4>Before Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}
sort($marks);

echo "<hr>";

echo"<h4>After Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}
echo "<h3>2.ksort() method</h3>";

echo"<h4>Before Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}
rsort($marks);

echo "<hr>";

echo"<h4>After Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}

echo "<h3>.asort() method</h3>";

echo"<h4>Before Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}
rsort($marks);

echo "<hr>";

echo"<h4>After Sorting :</h4>";
foreach ($marks as $mark) 
    {
    echo $mark."<br>";
}


?>









