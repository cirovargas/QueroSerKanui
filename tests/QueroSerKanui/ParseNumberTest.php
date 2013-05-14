<?php

namespace QueroSerKanui;

class ParseNumberTest extends \PHPUnit_Framework_TestCase
{

	protected $parseNumber;

	public function setUp(){
		$this->parseNumber = new ParseNumber(new Ka());
	}

	public function tearDown(){
		unset($this->parseNumber);
		$this->parseNumber = null;
	}

	public function testCriacaoDeInstanciaParsenumber()
	{
		$this->assertInstanceOf('QueroSerKanui\ParseNumber', $this->parseNumber);
	}




}