<?php
include 'html_dom.php';
$json = array();
$lastPg = 0;
for ($x = 0; $x <= 10; $x++) {
	$html = file_get_html('https://minecraft.curseforge.com/members/'.$_GET['c'].'/projects?page='.$x);
		foreach($html->find('a.e-avatar64') as $element) {
			$projectJson = file_get_html('http://mcmoddev.com/curse/cursereader.php?c='.str_replace('/projects/','',$element->href));
			echo str_replace('/projects/','',$element->href) . '<br>';
		}
	$lastPg=$x;
} 