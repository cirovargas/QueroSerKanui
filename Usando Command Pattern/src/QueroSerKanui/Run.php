<?php
namespace QueroSerKanui;

class Run
{
	public function __construct(){
		
		$numbers = new Numbers();
		$parser = new ParseNumber();

		while ($current = $numbers->current()) {
			
			$numbers->next();
			$kaNois = new KaNois;

			if($current % 5 ==0){
				$act = new Ka($kaNois);
			}
			if($current % 7 ==0){
				$act = new Nois($kaNois);
			}
			if($current % 7 !=0 && $current % 5 !=0){
				$act = new Number($kaNois);
			}
			$parser->parse($act,$current);

			echo "\n";
		}
	}

	
}

