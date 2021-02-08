<?php
session_start();
$content = "visitor >".$_SESSION['ip']." [ ".$_SESSION['country']." ] - [ ".$_SESSION['city']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
$save=fopen("visitor.txt","a+");
fwrite($save,$content);
?>
