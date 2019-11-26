<?php
$handle = fopen("https://gist.githubusercontent.com/TheCodedOne/9d649532be7395b85137a733573af0d4/raw/624361b95ad0e9bfd0505363fc99c4936c7ff06a/curse.txt", "r");
if ($handle) {
	$arr = array();
    while (($line = str_replace("\n","",fgets($handle))) !== false) {
		$arr[$line] = json_decode(file_get_contents('https://mcmoddev.com/curse/cursereader.php?c='.$line));
    }
	echo str_replace(array("<\/div>","<\/span>","\n",'<span class=\"overflow-tip\">','<div class=\"info-data\">'),"",json_encode($arr,JSON_PRETTY_PRINT));
    fclose($handle);
} else {
    // error opening the file.
} 
