<?php
namespace QueroSerKanui;

class ParseNumber
{
	public function __construct(){}

	public function parse(AbstractKaNois $number){
		return $number->getNumber();
	}
}