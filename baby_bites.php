<?php
$handle = fopen('php://stdin', 'r');
$bites = fgets($handle);
$words = explode(' ', fgets($handle));
$count = 0;
foreach ($words as $word) {
	$count++;
	if(trim($word) != 'mumble'){
		if((int)$word != $count){
			echo "something is fishy";
			exit;
		}
	}
}

echo "makes sense";


