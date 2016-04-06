#!/usr/bin/php
<?php
function fct_eval_array($string)
{
	if ($string === "")
		return(0);
	return(1);
	}
if ($argc > 1)
{
$tab = array_filter(explode(" ", $argv[1]), "fct_eval_array");
$first = array_shift($tab);
foreach ($tab as $elem)
	echo $elem." ";
echo $first."\n";
}
?>
