<?php
namespace QueroSerKanui;

class ParseNumber
{
	public function __construct(){}

	public function parse(AbstractKaNois $number){
		echo $number->getNumber();
	}
}