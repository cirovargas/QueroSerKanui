<?php
namespace QueroSerKanui;

class ParseNumber
{
	public function __construct(){}

	public function parse(KaNoisInterface $action,$number){
		$action->execute($number);
	}
}