<?php
/**
 * strpos = casesenctive / serch first to last
 * stripos = case unsenctive
 * strrpod =  search last to first
 * strripos =
 * !== check type
 * == / === value check/ value or type check
 * 
 */
//===========casesenctive=================
$string = " Quick brown fox jumps over the lazy dog";
echo strpos($string, "fox");

echo "<br>";
//=============case unsenctive================
$string = " Quick brown fox Jumps over the lazy dog";
echo stripos($string, "Jump"); // but is search "jumps" it will not found

echo "<br>";

//=============search last to first===============
$string = " Quick brown fox Jumps over the lazy dog";
$ofset = strrpos($string, "the"); // but is search "jumps" it will not found
if($ofset !== false){ // type check {it's importent}
    echo "Word was found = ";
    echo "{$ofset}";
}
else echo "Word was not found";
echo "<br>";

//==================reverse search======================

$string = " Quick brown fox fox Jumps over the lazy dog";
echo stripos($string, "Jumps"); 
echo strrpos($string, "Jumps"); 

echo "<br>";










