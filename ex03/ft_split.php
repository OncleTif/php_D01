#!/usr/bin/php
<?php
function fct_eval_array($string)
{
	if ($string === "")
		return(0);
	return(1);
	}
	function ft_split($string)
	{
		$array = array_filter(explode(" ", $string), "fct_eval_array");
		sort($array);
		return($array);
		}
?>
