#!/usr/bin/php
<?php
$i = 1;
if ($argc > 1)
{
while ($i < $argc)
{
$tab[$i] = array_filter(explode(" ",$argv[$i]));
$i++;
}
$merge = array();
foreach ($tab as $param)
{
$merge = array_merge($merge, $param);
}
sort($merge);
foreach ($merge as $word)
echo $word."\n";
}
?>
