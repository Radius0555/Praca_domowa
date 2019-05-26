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

$array = [1,1,1,2,2,3,3,2,3,4,5,5,5,6,3,3,2,1,2,4];

function avg(array $array): int
{
    return array_sum($array)/count($array);
}

function median(array $array): int
{
	sort($array);
	$arrL = count($array);
	$i = $arrL/2;
	return $array[$i];
}

function peaks(array $array): array
{
    return [];
}

print_r(avg($array) . "\n"); // 2
print_r(median($array) . "\n"); // 3
print_r(peaks($array)); // [1,2,3,2,3,4,5,6,3,2,1,2,4]