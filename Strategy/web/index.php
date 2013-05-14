<?php

use QueroSerKanui\Main;

$loader = require_once __DIR__.'/../bootstrap.php';

$KaNois = new Main();

foreach($KaNois->runNumbers() as $number){
	echo $number."\n";
}