#!/usr/bin/php
<?php
function fct_eval_array($string)
{
	if ($string === "")
		return(0);
	return(1);
	}
if ($argc == 2)
{
$tab = array_filter(explode(" ",$argv[1]), "fct_eval_array");
foreach ($tab as $index => $word)
{
	if (isset($not_first))
		echo " ";
	else
		$not_first = 1;
	echo $word;
	}
echo "\n";
}
?>
