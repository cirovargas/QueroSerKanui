<?php

use QueroSerKanui\Main;

$loader = require_once __DIR__.'/../bootstrap.php';

$KaNois = new Main();

echo serialize($KaNois->runNumbers());
// foreach($KaNois->runNumbers() as $number){
// 	echo $number."\n";
// }