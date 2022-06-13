<?php 

$data= array(
	array(1,2,3,'A'),
	array(1,2,'B','C'),
	array(1, 'D', 'E', 'F')
);

for($i=3 , $s=0; $i>=1; $i--,$s++)
	{
		for($j=0; $j<$i; $j++)
			echo $data[$s][$j];
		echo "<br>";
	}
	echo "<br><br>";

$alpha = range('A', 'Z');  
for($i=0; $i<3; $i++)
{   
  for($j=0, $s=3; $j<=$i; $j++, $s--)
  {  
    echo $data[$i][$s]."\n";  
  }  
    echo "<br>";  
}  

?>