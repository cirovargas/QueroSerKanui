<?php
namespace QueroSerKanui;

class Main
{
	private $arrayKaNois = array();
	private $numbers;
	private $parser;

	public function __construct(){
		$this->numbers = new Numbers();
		$this->parser = new ParseNumber();
	}

	public function runNumbers(){

		while ($current = $this->numbers->current()) {
			$this->numbers->next();
			$factory = new NumberFactory($current);
			$this->arrayKaNois[] = $this->parser->parse($factory->build());
		}

		return $this->arrayKaNois;
	}
}