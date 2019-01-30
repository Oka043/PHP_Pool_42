#!/usr/bin/php
<?php 
	function ft_is_sort($arr) 
	{
		if (!$arr)
			return null;
		$sort_arr = $arr;
		sort($sort_arr);
		if (array_diff_assoc($sort_arr, $arr) == null)
			return true;
		return false;
	}
?>