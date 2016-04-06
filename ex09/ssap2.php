#!/usr/bin/php
<?php
function is_alpha($string)
{
$ascii = ord($string);
if (($ascii >= ord("a") && $ascii <= ord("z")) || ($ascii >= ord("A") && $ascii <= ord("Z")))
	return (1);
return(0);
}
function fct_eval_array($string)
{
	if ($string === "")
		return(0);
	return(1);
	}
function cmp($str1, $str2)
{
	$tab1 = str_split($str1);
	$tab2 = str_split($str2);
	$i = 0;
	while ($i < sizeof($str1) && $str1[$i] == $str2[$i])
		$i++;
if (is_alpha($str1[$i]))
{
if (is_alpha($str2[$i]))
	$ret = strcasecmp($str1, $str2);
else
	$ret = -1;
	}
else if (is_numeric($str1[$i]))
		{
if (is_alpha($str2[$i]))
$ret = 1;
else	if (is_numeric($str2[$i]))
		$ret = strcmp($str1[$i], $str2[$i]);
	else
		$ret = -1;
	}
	else
	{
if (is_alpha($str2[$i]) || is_numeric($str2[$i]))
	$ret = 1;
else
	$ret = strcmp($str1[$i], $str2[$i]);
	}
	return ($ret);
}

$i = 1;
if ($argc > 1)
{
while ($i < $argc)
{
$tab[$i] = array_filter(explode(" ",$argv[$i]), "fct_eval_array");
$i++;
}
$merge = array();
foreach ($tab as $param)
{
$merge = array_merge($merge, $param);
}
usort($merge, "cmp");
foreach ($merge as $word)
echo $word."\n";
}
?>
