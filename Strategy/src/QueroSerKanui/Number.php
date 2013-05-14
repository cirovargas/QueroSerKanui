<?php
namespace QueroSerKanui;

class Number extends AbstractKaNois
{
	private $number;

	public function __construct($number){
		if(!is_int($number))
			throw new InvalidArgumentException("Invalid argument", 1);
		
		$this->number = $number;
	}
	public function getNumber(){
		return $this->number;
	}
}
