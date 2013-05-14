<?php
namespace QueroSerKanui;

class NumberFactory
{

	private $number;

	public function __construct($number){
		$this->number = $number;
	}

	public function build(){

		if(!is_int($this->number))
			throw new InvalidArgumentException("Invalid argument", 1);
		
		if($this->number % 7 ==0 && $this->number % 5 ==0){ return new KaNois; }
		
		if($this->number % 5 ==0){ return new Ka; }
		
		if($this->number % 7 ==0){ return new Nois; }
		
		if($this->number % 7 !=0 && $this->number % 5 !=0){ return new Number($this->number); }
	}

	private function buildKa(){
		return new Ka;
	}

	private function buildNois(){
		return new Nois;
	}

	private function buildNumber(){
		return new Number;
	}

	private function buildKaNois(){
		return new Kanois;
	}

}