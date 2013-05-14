<?php

namespace QueroSerKanui;

class NumbersTest extends \PHPUnit_Framework_TestCase
{

	protected $numbers;

	public function setUp(){
		$this->numbers = new Numbers();
	}

	public function tearDown(){
		unset($this->numbers);
		$this->numbers = null;
	}

	public function testCriacaoDeInstanciaNumbers()
	{
		$this->assertInstanceOf('QueroSerKanui\Numbers', $this->numbers);
	}

	public function testNumbersCriadoComSucesso()
	{
		$this->assertCount(100, $this->numbers->getArray());
	}

	public function testNextFuncionando()
	{
		$this->assertEquals(2, $this->numbers->next());
	}

	public function testCurrentFuncionando()
	{
		$this->assertEquals(1, $this->numbers->current());
	}

	public function testRewindFuncionando()
	{
		$this->numbers->next();
		$this->numbers->next();
		$this->numbers->next();
		$this->assertEquals(0, $this->numbers->rewind());
	}

	public function testKeyFuncionando()
	{
		$this->numbers->next();
		$this->numbers->next();
		$this->numbers->next();
		$this->assertEquals(3, $this->numbers->key());
	}

	public function testValidFuncionando()
	{

		for($i=0;$i<=200;$i++)
			$this->numbers->next();
		$this->assertFalse($this->numbers->valid());
	}

	


}