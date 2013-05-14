<?php

namespace QueroSerKanui;

class NumberFactoryTest extends \PHPUnit_Framework_TestCase
{

	protected $factory;

	public function setUp(){}

	public function tearDown(){
		unset($this->factory);
		$this->factory = null;
	}

	public function testCriacaoDeInstanciaNumberFactory()
	{
		$this->factory = new NumberFactory(5);
		$this->assertInstanceOf('QueroSerKanui\NumberFactory', $this->factory);

		$this->factory = new NumberFactory(7);
		$this->assertInstanceOf('QueroSerKanui\NumberFactory', $this->factory);

		$this->factory = new NumberFactory(8);
		$this->assertInstanceOf('QueroSerKanui\NumberFactory', $this->factory);
	}

	public function testFactoryInvalidArgument()
	{
		$this->factory = new NumberFactory("dsfsdf");
		$this->assertFalse($this->factory instanceof QueroSerKanui\NumberFactory);
	}

	public function testFactoryBuildKa()
	{
		$this->factory = new NumberFactory(5);
		$this->assertInstanceOf('QueroSerKanui\Ka', $this->factory->build());
	}

	public function testFactoryBuildKanois()
	{
		$this->factory = new NumberFactory(70);
		$this->assertInstanceOf('QueroSerKanui\KaNois', $this->factory->build());
	}

	public function testFactoryBuildNois()
	{
		$this->factory = new NumberFactory(7);
		$this->assertInstanceOf('QueroSerKanui\Nois', $this->factory->build());
	}

	public function testFactoryBuildKanumber()
	{
		$this->factory = new NumberFactory(8);
		$this->assertInstanceOf('QueroSerKanui\Number', $this->factory->build());
	}









}