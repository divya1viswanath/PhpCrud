<?php
function sum($a,$b)
{
	return $a+$b;
}
function product($a,$b)
{
	return $a*$b;
}
function average($a,$b)
{
	return $a+$b/2;
}
echo average(sum(product(2,5),10),20);
?>