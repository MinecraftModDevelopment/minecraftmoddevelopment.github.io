<?php
include 'html_dom.php';
$json = array();
$lastPg = 0;
$index =0;
$dup = 0;
for ($x = 1; $x <= 100; $x++) {
		$html = file_get_html('https://minecraft.curseforge.com/members/'.$_GET['c'].'/projects?page='.$x);
		foreach($html->find('a.e-avatar64') as $element) {
			if(!array_key_exists(str_replace('/projects/','',$element->href),$json)) {
				$json[$index]=str_replace('/projects/','',$element->href);
			} else {
				$dup = 1;
				break;
			}
			$index++;
		}
		if($dup==1)
			break;
	$lastPg=$x;
} 

echo json_encode($json);