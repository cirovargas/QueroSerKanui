<?php

namespace QueroSerKanui;

class MainTest extends \PHPUnit_Framework_TestCase
{

	protected $main;

	public function setUp(){
		$this->main = new Main();
	}

	public function tearDown(){
		unset($this->main);
		$this->main = null;
	}

	public function testCriacaoDeInstanciaMain()
	{
		$this->assertInstanceOf('QueroSerKanui\Main', $this->main);
	}

	public function testArrayRetornadoMainCemPosisoes()
	{
		$this->assertCount(100, $this->main->runNumbers());
	}

	public function testArrayRetornadoValoresCorretos()
	{
		$arrayRetornado = $this->main->runNumbers();
		$this->assertEquals("Ka", $arrayRetornado[4]);
		$this->assertEquals("Nois", $arrayRetornado[6]);
		$this->assertEquals("3", $arrayRetornado[2]);
		$this->assertEquals("KaNois", $arrayRetornado[69]);
		$serializado = 'a:100:{i:0;i:1;i:1;i:2;i:2;i:3;i:3;i:4;i:4;s:2:"Ka";i:5;i:6;i:6;s:4:"Nois";i:7;i:8;i:8;i:9;i:9;s:2:"Ka";i:10;i:11;i:11;i:12;i:12;i:13;i:13;s:4:"Nois";i:14;s:2:"Ka";i:15;i:16;i:16;i:17;i:17;i:18;i:18;i:19;i:19;s:2:"Ka";i:20;s:4:"Nois";i:21;i:22;i:22;i:23;i:23;i:24;i:24;s:2:"Ka";i:25;i:26;i:26;i:27;i:27;s:4:"Nois";i:28;i:29;i:29;s:2:"Ka";i:30;i:31;i:31;i:32;i:32;i:33;i:33;i:34;i:34;s:6:"KaNois";i:35;i:36;i:36;i:37;i:37;i:38;i:38;i:39;i:39;s:2:"Ka";i:40;i:41;i:41;s:4:"Nois";i:42;i:43;i:43;i:44;i:44;s:2:"Ka";i:45;i:46;i:46;i:47;i:47;i:48;i:48;s:4:"Nois";i:49;s:2:"Ka";i:50;i:51;i:51;i:52;i:52;i:53;i:53;i:54;i:54;s:2:"Ka";i:55;s:4:"Nois";i:56;i:57;i:57;i:58;i:58;i:59;i:59;s:2:"Ka";i:60;i:61;i:61;i:62;i:62;s:4:"Nois";i:63;i:64;i:64;s:2:"Ka";i:65;i:66;i:66;i:67;i:67;i:68;i:68;i:69;i:69;s:6:"KaNois";i:70;i:71;i:71;i:72;i:72;i:73;i:73;i:74;i:74;s:2:"Ka";i:75;i:76;i:76;s:4:"Nois";i:77;i:78;i:78;i:79;i:79;s:2:"Ka";i:80;i:81;i:81;i:82;i:82;i:83;i:83;s:4:"Nois";i:84;s:2:"Ka";i:85;i:86;i:86;i:87;i:87;i:88;i:88;i:89;i:89;s:2:"Ka";i:90;s:4:"Nois";i:91;i:92;i:92;i:93;i:93;i:94;i:94;s:2:"Ka";i:95;i:96;i:96;i:97;i:97;s:4:"Nois";i:98;i:99;i:99;s:2:"Ka";}';
		$this->assertEquals($serializado, serialize($arrayRetornado));
		
	}
}