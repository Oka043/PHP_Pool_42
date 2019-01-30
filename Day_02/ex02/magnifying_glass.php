#!/usr/bin/php
<?php
	function 	up3($val)
	{
		$val[0] = preg_replace('/' . preg_quote($val[1]) . '/', mb_strtoupper($val[1]), $val[0]); #upper the last title
			return ($val[0]);
	}
	function 	up2($val)
	{
		return (mb_strtoupper($val[0]));
	}
	function 	up1($val)
	{
		$val[0] = preg_replace_callback('/>[^<]*</is', "up2", $val[0]);
		$val[0] = preg_replace_callback('/title="([^"]*)"/i', "up3", $val[0]);
		return ($val[0]);
	}
	function 	uppercase(&$html){
		$html = preg_replace_callback('/<a[^>]*>.*?<\/a>/is', "up1", $html);
	}
	if ($argc < 2)
		exit();
	if (!is_file($argv[1]))
		exit();
	$stdin = fopen($argv[1], "r");
	$read = fread($stdin, filesize($argv[1]));
	fclose($stdin);
	uppercase($read);
	echo "$read\n";
?>