<?php

function (
	$mixed,
	array $array,
	string $string,
	int $int
) {
	$array += [];

	$array + $array;
	$array - $array;

	5 / 2;
	5 / 0;
	5 % (1 - 1);
	$int / 0.0;

	$mixed + [];
	1 + $string;
	1 + "blabla";
	1 + "123";
};

function (
	array $array
) {
	$array += "foo";
};

function (
	array $array
) {
	$array -= $array;
};

function (
	int $int1,
	int $int2,
	string $str1,
	string $str2
) {
	$int1 << $int2;
	$int1 >> $int2;
	$int1 >>= $int2;

	$str1 << $str2;
	$str1 >> $str2;
	$str1 >>= $str2;
};

function (
	int $int1,
	int $int2,
	string $str1,
	string $str2
) {
	$int1 <<= $int2;
	$str1 <<= $str2;
};

function (
	int $int,
	string $string
) {
	$int & 5;
	$string & 5;
	$int | 5;
	$string | 5;
	$int ^ 5;
	$string ^ 5;
};

function (
	string $string1,
	string $string2,
	stdClass $std,
	\Test\ClassWithToString $classWithToString
) {
	$string1 . $string2;
	$string1 . $std;
	$string1 . $classWithToString;

	$string1 .= $string2;
	$string1 .= $std;
	$string2 .= $classWithToString;
};
