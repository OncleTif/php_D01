#!/usr/bin/php
<?php
function moyenne($tab)
{
	$somme = 0;
	$n_notes = 0;
	foreach ($tab as $correc)
	{
if (isset($correc[1]) && $correc[1] != "" && is_numeric($correc[1]) && $correc[2] != "moulinette")
{
$n_notes++;
$somme = $somme + $correc[1];
}
}
if ($n_notes)
echo $somme / $n_notes."\n";
}

function moyenne_user($tab)
{
	foreach ($tab as $correc)
	{
if (isset($correc[1]) && $correc[1] != "" && is_numeric($correc[1]) && $correc[2] != "moulinette")
{
	if (isset($booknote[$correc[0]]))
	{
	$booknote[$correc[0]] = $booknote[$correc[0]] + $correc[1];
	$numnote[$correc[0]]++;
	}
	else
	{
	$booknote[$correc[0]] = $correc[1];
	$numnote[$correc[0]] = 1;
	}
}
}
ksort($booknote,SORT_STRING);
foreach ($booknote as $login => $note)
echo $login.":".$note / $numnote[$login]."\n";
}

function ecart_moulinette($tab)
{

	foreach ($tab as $correc)
	{
if (isset($correc[1]) && $correc[1] != "" && is_numeric($correc[1]))
{
	if ($correc[2] != "moulinette")
	{

	if (isset($booknote[$correc[0]]))
	{
	$booknote[$correc[0]] = $booknote[$correc[0]] + $correc[1];
	$numnote[$correc[0]]++;
	}
	else
	{
	$booknote[$correc[0]] = $correc[1];
	$numnote[$correc[0]] = 1;
	}
	}
	else
	{
	if (isset($booknote_norm[$correc[0]]))
	{
	$booknote_norm[$correc[0]] = $booknote_norm[$correc[0]] + $correc[1];
	$numnote_norm[$correc[0]]++;
	}
	else
	{
	$booknote_norm[$correc[0]] = $correc[1];
	$numnote_norm[$correc[0]] = 1;
	}
	}
}
}
ksort($booknote,SORT_STRING);
foreach ($booknote as $login => $note)
{
	echo $login. ":" .(($note / $numnote[$login])-($booknote_norm[$login]/$numnote_norm[$login]))."\n";
}
}




if ($argc == 2)
{
$stdin = fopen("php://stdin", "r");
while (!feof($stdin))
{
	$tab[] = explode(";", fgets($stdin));
	}
if ($argv[1] == "moyenne")
	moyenne($tab);
	else if ($argv[1] == "moyenne_user")
	moyenne_user($tab);
	else if ($argv[1] == "ecart_moulinette")
	ecart_moulinette($tab);
}
?>
