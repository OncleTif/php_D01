#!/usr/bin/php
<?php
function fct_eval_array($string)
{
	if ($string === "")
		return(0);
	return(1);
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
sort($merge, SORT_STRING);
foreach ($merge as $word)
echo $word."\n";
}
?>
