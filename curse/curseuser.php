<?php
include 'html_dom.php';
$html = file_get_html('https://minecraft.curseforge.com/members/'.$_GET['c'].'/projects');
$json = array();

foreach($html->find('a.e-avatar64') as $element) 
       echo $element->href . '<br>';