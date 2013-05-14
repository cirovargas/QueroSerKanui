<?php
namespace QueroSerKanui;

class Run
{
	public function __construct(){
		
		$numbers = new Numbers();
		$parser = new ParseNumber();

		while ($current = $numbers->current()) {
			
			$numbers->next();
			
			$factory = new NumberFactory($current);
			$parser->parse($factory->build());

			echo "\n";
		}
	}


}
