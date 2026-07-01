/*
Program: Associative Array

Objective:
To create an associative array and display its elements using
direct key access
foreach loop
print_r() funtion

Author:Saranya M
Course: M.Sc. Information Technology
*/

<?php

$age=array("Saranya"=>"23", "Neha"=>"22", "Abi"=>"29", "Chandru"=>"24");

//Direct key access 
echo "<h3> Direct key access </h3>";
echo "Chandru's age is: ". $age["Chandru"];
echo "<hr>";

//foreach loop
echo "<h3> Foreach loop </h3>";
echo "Students Name with Age <br>";
foreach($age as $key=>$key_value)
{
  echo "Name: ".$key."  "."Age: ".$key_value;
  echo "<br>";
}
echo "<hr>";

// Using print_r() function
echo "<h3> Print_r() function</h3>";
echo "<pre>";
echo "Students Name with Age <br>";
print_r($age);
  ?>
  
















