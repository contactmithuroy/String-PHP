<?php
/**
 * '' single qute don't show parch value.
 * " " double qute show pach value
 * * heredoc = use line/ use assign multiple line
 * strrev= string revers
 * strlen = length of string
 * che =  ASCCI to Char
 * ord = Char to ASCCI
 * substr = print numbrer of charcheter using array
 */

$line = "I am Bangladesh";
echo '$line {$line} ';
echo "$line and we are also <br> \n \t"; // patch value work
echo "we always make a qural.";
 //==================== same as double qution
$heredoc = <<<EOD
Name 
Roll
Subject
University
<br>
EOD; // do not use space in front of EOD
echo $heredoc;
//====================== same single qution
$str = <<<'EOD'
Example of string
spanning multiple lines
using heredoc syntax.
EOD;
echo $str;
//=======================Part 2 ESSCI Code==================================


echo "<br>";

echo ord('A'); 
echo "<br>"; //==========line
echo ord('B');
echo "<br>"; //==========line
echo ord('Mithu Roy');
echo chr(87);
/*
// ord use charcter to ASCCI
// chr use ASCCI to charcter
$number = 28;
while($number != 0){
    $value = chr($number);
    echo " $value  ";
    echo "<br>";
    $number--;

}
for($n=0; 28 >= $n; $n++){
    $value = chr($n);
    echo "$value";
    echo "<br>";
}
*/
 echo "<br>";
//=======================part 3=====
$string = "Hello The World ";
echo $string[0];

echo "<br>";
echo $string[-2];
echo "<br>";

echo substr($string, 0, 15);
echo "<br>";

echo substr($string, -3,-2 );
echo "<br>";

//===============part 4===================================
//====revars 
//=======Right Way
$string = "Hello World";
$length = strlen($string);
for($i=0; $i < $length; $i++){
    echo $string[$i];

}
//========useing Negative serial Number
echo "<br>";
$string = "Hello World";
echo $string;
echo "<br>";

//===========================================
$length = strlen($string);
for($i=1; $i <= $length; $i++){
    echo $string[$i * -1];

}
//==========useing possitive serial number
echo "<br>";
$length = strlen($string)-1; // == 0 to last number
for($i=$length; $i>=0; $i--){
    echo $string[$i];
}

//=========useing function================================
echo "<br>";
$string = "1 2 3 4 5 6 7 8 9 0";
echo $string;
echo "<br>";
echo strrev ($string);

echo "<br>";
//==========================part 5-===========






























