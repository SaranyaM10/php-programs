/*<?php
$cars=array("BMW","Toyoto","Volvo");

echo "My favorite Car is ". $cars[2];

?>
<?php
$cars=array("BMW","Toyoto","Volvo");
$len=count($cars);
echo "My Favorite Cars are : <br>";
for($x=0;$x<$len;$x++)
  {
    echo  $cars[$x]."<br>";
  }
?>
<?php
$cars=array("BMW","Toyoto","Volvo");

echo "My Favorite Cars are : <br>";
foreach($cars as $car)
  {
    echo  $car."<br>";
  }
?>
<?php
$cars=array("BMW","Toyoto","Volvo");

echo "My Favorite Cars are : <br>";
print_r($cars);
?>
*/
<?php
/*
Program: Indexed Array

Objective:
To create an indexed array and retrieve data using different methods such as:
1. Direct index access
2. For loop
3. Foreach loop
4. print_r() function

Author: Saranya M
Course: M.Sc. Information Technology
*/

$cars = array("BMW", "Toyota", "Volvo");

// Direct Index Access
echo "<h3>Direct Index Access</h3>";
echo "My favorite car is: " . $cars[2];

echo "<hr>";

// Using For Loop
echo "<h3>Using For Loop</h3>";
$len = count($cars);

for($x = 0; $x < $len; $x++)
{
    echo $cars[$x] . "<br>";
}

echo "<hr>";

// Using Foreach Loop
echo "<h3>Using Foreach Loop</h3>";

foreach($cars as $car)
{
    echo $car . "<br>";
}

echo "<hr>";

// Using print_r()
echo "<h3>Using print_r() Function</h3>";
echo "<pre>";
print_r($cars);
echo "</pre>";

?>