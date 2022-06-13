<?php
$numbers = array(10,5,4,2,20);
$arrlength = count($numbers);
$search = 7;
$flag=0;
for($x = 0; $x < $arrlength; $x++) 
{
  if($search==$numbers[$x])
    $flag++;
}

if($flag)
  echo "Element found\n";
else
  echo "Element not found\n";

?>