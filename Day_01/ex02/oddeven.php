#!/usr/bin/php
<?php 
	$stdin = fopen("php://stdin", "r");
	while (1)
	 {
		echo "Enter a number: ";
		$nbr = fgets($stdin);
		if ($nbr == FALSE)
		{
			break ;
		}
		if ($nbr)
		{
			$nbr = substr($nbr, 0, -1);
			if (is_numeric($nbr))
			{
				if ($nbr % 2 == 0)
					echo "The number " . $nbr . " is even\n";
				else
					echo "The number " . $nbr . " is odd\n";
			}
			else
				echo "'" . $nbr . "' is not a number\n";
		}
	}
	fclose($stdin);
	echo "\n";
?>