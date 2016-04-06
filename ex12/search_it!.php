#!/usr/bin/php
<?php
if ($argc > 2)
{
$ret = NULL;
$i = 2;
while ($i < $argc)
{
$param = explode(":", $argv[$i]);
	if (sizeof($param) == 2 && $argv[1] === $param[0])
		$ret = $param[1];
$i++;
}
if ($ret !== NULL)
echo $ret."\n";
}
?>
