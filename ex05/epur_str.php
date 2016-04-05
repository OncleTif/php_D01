#!/usr/bin/php
<?php
if ($argc == 2)
{
$tab = array_filter(explode(" ",$argv[1]));
foreach ($tab as $index => $word)
{
	if ($index)
		echo " ";
	echo $word;
	}
echo "\n";
}
?>
