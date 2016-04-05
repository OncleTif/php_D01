#!/usr/bin/php
<?php
if ($argc > 1)
{
$tab = array_filter(explode(" ", $argv[1]));
$first = array_shift($tab);
foreach ($tab as $elem)
	echo $elem." ";
echo $first."\n";
}
?>
