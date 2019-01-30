#!/usr/bin/php
<?php 
	$arr = array();
	unset($argv[0]);
	foreach ($argv as $val) 
	{
		$temp = array_filter(explode(" ", $val));
		foreach ($temp as $key) 
		{
			$arr[] = $key;
		}
		sort($arr);
	}
	foreach ($arr as $val) {
		echo $val."\n";
	}
?>