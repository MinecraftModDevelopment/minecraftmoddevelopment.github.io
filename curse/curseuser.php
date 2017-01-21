<?php
include 'html_dom.php';
$json = array();
$lastPg = 0;
$index =0;
$dup = 0;
for ($x = 1; $x <= 100; $x++) {
		$html = file_get_html('https://minecraft.curseforge.com/members/'.$_GET['c'].'/projects?page='.$x);
		foreach($html->find('a.e-avatar64') as $element) {
			$projectJson = json_decode(file_get_html('http://mcmoddev.com/curse/cursereader.php?c='.str_replace('/projects/','',$element->href)));
			if(!array_key_exists(str_replace('/projects/','',$element->href),$json)) {
				$json[str_replace('/projects/','',$element->href)]=$projectJson;
			} else {
				$dup = 1;
				break;
			}
		}
		if($dup==1)
			break;
	$lastPg=$x;
} 

echo json_encode($json);