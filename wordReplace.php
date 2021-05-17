<?php
/**
 * str_replace('Value Name', $file veriable, it count );
 * str_ireplace = it's use for case unsencentive
 * 
 * str_ireplace(array(Old value), array(New Value), $file Name, $count)
 * 
 * 
 * 
 * 
 * 
 */

 //========================case sencetive ========

 $string = " Quick brown fox jumps over the lazy dog";
 echo "$string \n";
 echo "<br>";
 $replaceString = str_replace('brown', 'Brown', $string);
 echo $replaceString;
 echo "<br>";
 //====================unsencentive============================

 $replaceString = str_ireplace('Fox', 'Dog', $string); //  if use "str_replase" dose not work;
 echo $replaceString;
 echo "<br>";
//============Count how many string are replace================
$string = " Quick brown Down down fox jumps over the lazy dog";
 
$replaceString = str_ireplace('down', 'OVER', $string, $count ); //  if use "str_replase" dose not work;
 echo $replaceString;
 echo "<br>";
echo $count;

//==================multiple replace useing array=============================
$string = " Quick brown Down down fox jumps over the lazy dog";
 
$replaceString = str_ireplace(array('down', 'brown'), array('OVER', 'Yellow'), $string, $count ); //  if use "str_replase" dose not work;
 echo $replaceString;
 echo "<br>";
echo $count;





























