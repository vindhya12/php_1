<?php
	$a=10;
	$b='10';
	$c=10;
	$d=5;

//Equal example
	var_dump($a==$b); //prints bool(true)
	echo "<br>";
	var_dump($a==$c); //prints bool(true)
	echo "<br><br>";
//Identical example
	var_dump($a===$b); //prints bool(false)
	echo "<br>";
	var_dump($a===$c); //prints bool(true)
	echo "<br><br>";
//Not equal example
	var_dump($a!=$b); //prints bool(false)
	echo "<br>";
	var_dump($a<>$c); //prints bool(false)
	echo "<br><br>";
//Not identical example
	var_dump($a!==$b); //prints bool(true)
	echo "<br>";
	var_dump($a!==$c); //prints bool(false)
	echo "<br><br>";
//Concatentation assignment
	$t1="Svvv";
	$t2="Indore";
	$t1.=$t2;
	echo "$t1";

?>

	