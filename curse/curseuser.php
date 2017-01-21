<?php
include 'html_dom.php';
$json = array();
$lastPg = 0;
for ($x = 0; $x <= 10; $x++) {
	$html = file_get_html('https://minecraft.curseforge.com/members/'.$_GET['c'].'/projects?page='.$x);
		foreach($html->find('a.e-avatar64') as $element) {
			echo $element->href . '<br>';
		}
	$lastPg=$x;
} 