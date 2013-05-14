<?php

namespace QueroSerKanui;

class NumberTest extends \PHPUnit_Framework_TestCase
{

	protected $number;

	public function setUp(){
		$this->number = new Number(5);
	}

	public function tearDown(){
		unset($this->number);
		$this->number = null;
	}

	public function testCriacaoDeInstanciaNumber()
	{
		$this->assertInstanceOf('QueroSerKanui\Number', $this->number);
	}

	public function testExtendsNumberDeAbstractkanois()
	{
		$this->assertInstanceOf('QueroSerKanui\AbstractKaNois',$this->number);
	}

	public function testNumberImplementsKanoisinterface()
	{
		$this->assertEquals("QueroSerKanui\KaNoisInterface",
			array_search(
				"QueroSerKanui\KaNoisInterface",
				class_implements($this->number)
			)
		);
	}

	public function testNumberImplementsGetnumber()
	{
		$this->assertTrue(method_exists($this->number,"getNumber"));
		$this->assertTrue(is_int($this->number->getNumber()));
	}

	// public function testNumberSemParametro()
	// {
	// 	$this->tearDown();
	// 	if($this->number = new Number());
	// 	$this->assertTrue(method_exists($this->number,"getNumber"));
	// 	$this->assertTrue(is_int($this->number->getNumber()));
	// }
}