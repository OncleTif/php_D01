#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$copy = $tab;
	sort($copy);
$diff = array_diff_assoc($tab, $copy);
if (sizeof($diff) == 0)
	return (1);
	return (0);
}
?>
