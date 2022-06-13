<?php

	$number1= 10;
	$number2=5;
	$number3=15;

	if($number1>$number2)
	{
		if($number1>$number3)
			echo "Number 1 is biggest";
		else if($number3>$number2)
			echo "Number 3 is biggest ";
		
	}
    else if($number2>$number3)
    {
    	echo "Number 2 is biggest ";
    }