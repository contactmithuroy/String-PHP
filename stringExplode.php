<?php
/**
 * explode(" ", $veriable) = devide sentence and count
 * join/ implode = join every single word
 * str_split == ever single charcheter divided
 * preg_split == multi delimeter 
 * strtok == devide but no count
 * 
 */

 ///======================================
$string = "Hello World, How are you";
$parts = explode(" ",$string);
print_r($parts);

echo "<br>";
//========Join String=============
$orginal = join(" ", $parts); // implode
echo $string;

echo "<br>";
///================devided all char============
$everyparts = str_split($string);
print_r($everyparts);

echo "<br>";
//================using multiple delimeter========================
 $string4 = "Anybody who programs is PHP can be a contributing member, join with us";
 $line = preg_split("/ |,/", $string4);
 print_r($line);

 echo "<br>";
 //==========================================
 $string4 = "Anybody, who,know programming language, PHP";
$parts4 = strtok($string4, " ,");
while($parts4 !== false){
    echo $parts4;
    echo "<br>";
    $parts4 = strtok(" ,");
}






