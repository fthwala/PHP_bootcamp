#!/usr/bin/php
<?
	$str = trim($argv[1]);
	$str = preg_replace('/[ \t]+/', ' ', $str);
	echo "$str"."\n"
?>
