<?php
//Investigation of string

//1.strlen()

$membership="Sara";
if(strlen($membership)== 4)
    {
        print "Thankyou";
    }
    else{
        print"Your Membership number must have 4 digits.";
    }

    echo"<br>";

//2.strstr()

$membership="pAB7";
if(strstr($membership,"AB"))
    {
        print"Thank You. Don't forget your membership expires soon!";
    }
    else
        {
            print"Thank You!";
        }
        
    echo"<br>";

//3.strpos()

$membership= "mz00xyz";
if(strpos($membership,"mz")===0)
    {
        print "hello mz";
    }

    echo"<br>";

//4.substr()

$test= "scallywag";
print substr($test,6);
print substr($test,6,2);

    echo"<br>";

$test="matt@corrosive.co.uk";
if($test=substr($test,-3)==".uk")
    {
        print "Don't forget our special offers for British customers";
    }
    else{
        print "Welcome to our shop!";
    }

        echo"<br>";

//5.strtok()

$test= "http://www.deja.com/qs/xp?";
$test= "OP=dnquery.xp&ST=MS&DBS=2&QRY=developer+php";
$delims= "?&";
$word=strtok($test, $delims);
while(is_string($word)){
    if($word)
        {
            print "$word<br>";
        }
    $word=strtok($delims);  
}

        ?>