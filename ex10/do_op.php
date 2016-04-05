#!/usr/bin/php
<?php
if ($argc == 4 && is_numeric($argv[1]) && is_numeric($argv[3]))
{
	if (trim($argv[2]) == "+")
		echo $argv[1] + $argv[3]."\n";
	else if (trim($argv[2]) == "-")
		echo $argv[1] - $argv[3]."\n";
	else if (trim($argv[2]) == "*")
		echo $argv[1] * $argv[3]."\n";
	else if (trim($argv[2]) == "/")
		echo $argv[1] / $argv[3]."\n";
	else if (trim($argv[2]) == "%")
		echo $argv[1] % $argv[3]."\n";
	else
	echo "Incorrect Parameters\n";
}
else
	echo "Incorrect Parameters\n";
?>
