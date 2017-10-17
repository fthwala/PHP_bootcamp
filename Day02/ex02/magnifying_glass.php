#!/usr/bin/php
<?php
/*if (filter_var($url, FILTER_VALIDATE_URL) !== FALSE) 
	{
	   //die('Not a valid URL')
		$homepage = file_get_contents('page.html');
	}
	
echo $homepage;*/

/*function get_data($url)
{
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
if($argc < 2 )
{
	$fd = fopen("page.html", "r");
	while($line = fgets($fd))
	{
		if (filter_var($line, FILTER_VALIDATE_URL) !== FALSE) 
		{
			$str = get_data($line);
			//$c = curl_init($line);
			//$str = curl_exec($c);
		}
	}
}
echo "$str";
echo "$line";*/

//$returned_content = get_data('https://davidwalsh.name');*/
if ($argc < 2 || !file_exists($argv[1]))
exit();
$read = fopen($argv[1], 'r');
$page = "";
while ($read && !feof($read)) {
$page .= fgets($read);
}
$page = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/si", function($matches) {
$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", function($matches) {
	return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
}, $matches[0]);
$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", function($matches) {
	return ($matches[1]."".strtoupper($matches[2])."".$matches[3]);
}, $matches[0]);
return ($matches[0]);
}, $page);
?>
