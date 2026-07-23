<?php

//1.how to send a cookie to the browser

setcookie("LoginName","Saranya.M");
setcookie("PreferredColor","Blue");
print("2 Coolie were delivered. \n");

//2.how to receive a cookie from a browser

if (isset($_COOKIE["LoginName"])) {
    $loginName = $_COOKIE["LoginName"];
    print("Did not received any cookie named as LoginName. \n");
}
else
    {
        print("All coolies received: \n");
    }
    foreach($_COOKIE as $name => $value){
        print "$name= $value \n";
    }

//3.how to test cookies on a Web Server

$count=count($_COOKIE);
print("$count coolies received. \n");
foreach($_COOKIE as $name => $value){
    print "$name=$value \n";
}

//4.how to set a persistent cookie

setcookie("CouponNumber","123456",time()+60*60*24*7);
setcookie("CouponValue","100.00",time()+60*60*24*7);
print("2 temporary cookies were delivered. \n");
print("2 consistent cookies were delivered. \n");


//5.how to test Persistent Cookie


?>