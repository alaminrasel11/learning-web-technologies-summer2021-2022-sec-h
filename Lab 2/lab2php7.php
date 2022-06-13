<?php
 
	for($i=1 ; $i<=3; $i++)
	{
		for($j=0; $j<$i; $j++)
			echo "*";
		echo "  <br> ";
	}

	echo "<br><br>";

	for($i=3 ; $i>=1; $i--)
	{
		for($j=0; $j<$i; $j++)
			echo ($j+1);
		echo "<br>";
	}

	echo "<br><br>";

$alpha = range('A', 'Z');  
$flag=0;
for($i=0; $i<3; $i++)
{   
  for($j=0; $j<=$i; $j++)
  {  
    echo $alpha[$flag]."\n";  
    $flag++;
  }  
    echo "<br>";  
}  

?>