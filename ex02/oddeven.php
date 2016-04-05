#!/usr/bin/php
<?php
$stdin = fopen("php://stdin", "r");
while (!feof($stdin))
{
	print("Entrez un nombre: ");
	$number = trim(fgets($stdin));
	if (!feof($stdin))
	{
		if (is_numeric($number))
		{
			print("Le chiffre ".$number." est ");
			if ($number % 2)
				print("Impair");
			else
				print("Pair");
}
else
	print("'".$number."' n'est pas un chiffre");
}
print("\n");
}
fclose($stdin);
?>
