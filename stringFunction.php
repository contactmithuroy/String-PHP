<?php
/**
 * trim = delete nonprintable data
 * ltrim = delete laft side nonprintable data
 * rtrim = delete right side nonprintable data
 * 
 * nl2br ==  for \n new line in browser // u
 * 
 * wordwarp($fileName, how many line, if devide {\n / <br>}, true);
 * 
 */
$string = " Contrubation <br> ,";
$string = trim($string, ","); // delete coma 
echo $string;


echo "sensitive";

//===============nl2br Function======================
$myText = "Anybody who programs in PHP can be a contributing \n member of the community that develops and deploys it; \n the task of deploying PHP, \n documentation and associated websites is a never ending one.";

echo $myText;
echo nl2br($myText); // usefull function if we use \n / new line;

echo nl2br("\n");
echo nl2br("\n");
//==============wordwrap============================================

$myText = "Anybody who programs in PHP can be a contributing \n member of the community that develops and deploys it; \n the task of deploying PHP, \n documentation and associated websites is a never ending one.";

echo wordwrap($myText, 26, "<br>", true);










