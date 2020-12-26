<?php
	$a=10;
	$b='10';
	$c=10;
	$d=5;

	if($a>$b && $a>$d)	//'and' operator can also be used
	{ 	
		echo "True";
	}
	else
	{
		echo"False";
	}
	echo "<br> <br>";

	if($a>$b || $a>$d)	//'or' operator can also be used
	{ 	
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br> <br>";

	if($a==$b xor $a==$c)	//True if either $x or $y is true, but not both 
	{ 	
		echo "True";
	}
	else
	{
		echo "False";
	}
	echo "<br> <br>";

//Ternary Operator

	$user=null;
	echo $status=(empty($user)) ? "anonymous" : "logged in";
	echo("<br>");
	
	$user="John";
	echo $status=(empty($user)) ? "anonymous" : "logged in";
	echo "<br><br>";
?>

	



	
