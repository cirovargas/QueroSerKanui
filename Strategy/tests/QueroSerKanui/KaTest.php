<?php

namespace QueroSerKanui;

class KaTest extends \PHPUnit_Framework_TestCase
{

	protected $ka;

	public function setUp(){
		$this->ka = new Ka();
	}

	public function tearDown(){
		unset($this->ka);
		$this->ka = null;
	}

	public function testCriacaoDeInstanciaKa()
	{
		$this->assertInstanceOf('QueroSerKanui\Ka', $this->ka);
	}

	public function testExtendsKaDeAbstractkanois()
	{
		$this->assertInstanceOf('QueroSerKanui\AbstractKaNois',$this->ka);
	}

	public function testKaImplementsKanoisinterface()
	{
		$this->assertEquals("QueroSerKanui\KaNoisInterface",
			array_search(
				"QueroSerKanui\KaNoisInterface",
				class_implements($this->ka)
			)
		);
	}

	public function testKaImplementsGetnumber()
	{
		$this->assertTrue(method_exists($this->ka,"getNumber"));
		$this->assertEquals("Ka", $this->ka->getNumber());
	}
}