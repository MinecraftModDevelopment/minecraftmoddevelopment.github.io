<?php
$json = '[
  {
    "user": "Jriwanek",
    "icon": "https://mcmoddev.com/img/jri.jpg",
    "role": "Mod Developer | MMD Admin"
  },
  { 
    "user": "Darkhax",
    "icon": "https://mcmoddev.com/img/darkhax_600v2.jpg",
    "role": "Mod Developer | MMD Admin"
  }
]';

$arr = json_decode($json);

foreach ($arr as $key => $value) {
	print($value->{'user'});
	print($value["icon"]);
	print($value["role"]);
}
?>
