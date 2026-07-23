<?php
$numValue=5;
$strValue= "Hello world";

//sign specifier
 printf("Signed Number: %+d\n",$numValue);

 //padding and width specifier
 printf("Padding and Width \n %03d \n",$numValue);
 printf("Padding and Width \n %03d \n",$numValue+10);

 //precision specifier
 printf("Precision:: %.5f\n",$numValue);
 printf("Precision:: %.5s\n",$strValue);

 //different datatypes

 //integer and percentile
 printf("Integer: %d\n",$numValue);
 printf("Percentile: %d%%\n",$numValue);

 //binary octal and hexadecimal representation

 printf("Binary: %b\n",$numValue);
 printf("Octal: %o\n",$numValue+10);
 printf("Hexadecimal: %x\n",$numValue+10);

 //character representation
echo"<br/>";
 printf("Character: %c\n",$numValue+62);
 echo"<br/>";
 printf("Character: %c\n",$numValue+67);
 echo"<br/>";
 printf("Character: %c\n",$numValue+60);
 echo"<br/>";
 printf("Character: %c\n",$numValue+73);
 echo"<br/>";
 printf("Character: %c\n",$numValue+63);
 echo"<br/>";
 printf("Character: %c\n",$numValue+77);
 echo"<br/>";
 printf("Character: %c\n",$numValue+80);
 echo"<br/>";
 ?>






