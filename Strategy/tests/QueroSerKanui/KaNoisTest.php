<?php

namespace QueroSerKanui;

class KaNoisTest extends \PHPUnit_Framework_TestCase
{

	protected $kaNois;

	public function setUp(){
		$this->kaNois = new KaNois(5);
	}

	public function tearDown(){
		unset($this->kaNois);
		$this->kaNois = null;
	}

	public function testCriacaoDeInstanciaKanois()
	{
		$this->assertInstanceOf('QueroSerKanui\KaNois', $this->kaNois);
	}

	public function testExtendsKanoisDeAbstractkanois()
	{
		$this->assertInstanceOf('QueroSerKanui\AbstractKaNois',$this->kaNois);
	}

	public function testKanoisImplementsKanoisinterface()
	{
		$this->assertEquals("QueroSerKanui\KaNoisInterface",
			array_search(
				"QueroSerKanui\KaNoisInterface",
				class_implements($this->kaNois)
			)
		);
	}

	public function testKanoisImplementsGetnumber()
	{
		$this->assertTrue(method_exists($this->kaNois,"getNumber"));
		$this->assertEquals("KaNois", $this->kaNois->getNumber());
	}
}