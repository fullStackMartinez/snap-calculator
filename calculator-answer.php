<?php
/**
 * Created by PhpStorm.
 * User: Esteban
 * Date: 1/29/2018
 */
function add(float $first, float $second) : float {
	return($first + $second);
}
function divide(float $first, float $second) : float {
	return($first / $second);
}
function multiply(float $first, float $second) : float {
	return($first * $second);
}
function subtract(float $first, float $second) : float {
	return($first - $second);
}
//sub, multi and divide all same as above with different signs

function main(float $first, float $second) : void {
	echo "addition: " . add($first,$second) . PHP_EOL;
	echo "division: " . divide($first,$second) . PHP_EOL;
	echo "multiplication: " . multiply($first,$second) . PHP_EOL;
	echo "subtraction: " . subtract($first,$second) . PHP_EOL;
}
//call function, if you don't you will get back an empty string

main(42, 5); //now you pass through numbers and the functions run with those same numbers
