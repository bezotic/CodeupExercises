<?php


$a = 4;
$b = 6;


function add($a, $b)
{
    return $a + $b;
}

	echo add(2, 2) .PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}
	echo subtract(5, 2) .PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}
	echo multiply(5, 5) .PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}
	echo divide(10,2) .PHP_EOL;

function modulus($a, $b)
{
	return $a % $b;
}
	echo modulus(10,2) .PHP_EOL;
	echo modulus(10,3) .PHP_EOL;


