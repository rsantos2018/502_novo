<?php

//TestesTest.php

use PHPUnit\Framework\TestCase;

class TestesTest extends TestCase
{
	// Testa se é idêntico
	public function testSame(){
		
		$soma = 2+2+2;

		$this->assertSame(6,$soma);

	}

	//Testa se é verdadeiro somente boolean
	public function testTrue()
	{
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}

	//Testa se é falso
	public function testFalse()
	{
		$falso = false;

		$this->assertfalse($falso);
	}


	public function testCount()
	{
		$arr = ["a",1,true];

		$count = count($arr);

		$this->assertCount(3,$arr);
		$this->assertSame(3,$count);
		$this->assertSame("a",$arr[0]);
	}

	//Testa se é vazio
	public function testEmpty()
	{
		//0 , "", false,[],null
		$vazio = "";

		$this->assertEmpty($vazio);
	}
	
	//Testa o nulo
	public function testNull()
	{
		$vazio = null;

		$this->assertNull($vazio);
	}

	//Testa se é igual mas não identico
	public function testEquals()
	{
		$a = "1";
		$b = 1;

		$this->assertEquals($a, $b);
	}


}

	//Para testar = phpunit --colors TesteTest.php (no terminal).


