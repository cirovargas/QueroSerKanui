<?php

namespace QueroSerKanui;

class NoisTest extends \PHPUnit_Framework_TestCase
{

	protected $nois;

	public function setUp(){
		$this->nois = new Nois();
	}

	public function tearDown(){
		unset($this->nois);
		$this->nois = null;
	}

	public function testCriacaoDeInstanciaNois()
	{
		$this->assertInstanceOf('QueroSerKanui\Nois', $this->nois);
	}

	public function testExtendsNoisDeAbstractkanois()
	{
		$this->assertInstanceOf('QueroSerKanui\AbstractKaNois',$this->nois);
	}

	public function testNoisImplementsKanoisinterface()
	{
		$this->assertEquals("QueroSerKanui\KaNoisInterface",
			array_search(
				"QueroSerKanui\KaNoisInterface",
				class_implements($this->nois)
			)
		);
	}

	public function testNoisImplementsGetnumber()
	{
		$this->assertTrue(method_exists($this->nois,"getNumber"));
		$this->assertEquals("Nois", $this->nois->getNumber());
	}
}