<?php

///**
// * Otrzymałeś tablicę $array, która reprezetuje zmianę jakiejś wartości w czasie.
// * Musisz napisać trzy funkcje:
// *
// * avg() - zwraca średnią arytmetyczną z tablicy $array
// *
// * median() - zwraca medianę wartości z tablicy $array
// *
// * peaks() - zwraca tablicę, która zawiera tylko zmiany wartości. Metoda powinna zwracać tylko te wartości, które nie są
// * poprzedzone lub nie następuje po nich ta sama wartość np:
// * 1,2,3 -> 1,2,3
// * 1,1,2,3 -> 1,2,3
// * 1,1,2,2,3,4 -> 1,2,3,4
// */

$array = [1,1,1,2,2,3,3,2,3,6,4,5,5,5,6,3,3,2,1,2,4];
//$array = [1,2,3,4,5,6,7,8,9,10,11,12];

function avg(array $array): int
{
    return array_sum($array)/count($array);
}

function median(array $array): int
{
	sort($array);
	$arrL = count($array);
	$modulo = $arrL % 2;
	$i = $arrL/2;
	
	if($modulo == 0)
	{
		$result = $array[--$i] + $array[++$i];
		return $result/2;
	}
	else if($modulo == 1)
	{
		return $array[--$i];
	}
	else
	{
		$text = 'Jakiś problem!';
		return	$text;
	}
}

function peaks(array $array): array
{
    return [];
}

print_r(avg($array) . "\n"); // 2
print_r(median($array) . "\n"); // 3
print_r(peaks($array)); // [1,2,3,2,3,4,5,6,3,2,1,2,4]