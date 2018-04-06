<?php

require_once 'Cliente.php';

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
	public function testCriacaoCliente()
	{
		$cliente = new Cliente('reginaldo',48,'regi35@terra.com.br');
		
		$this->assertSame('reginaldo', $cliente->getNome());		
		$this->assertSame(48,$cliente->getIdade());		
		$this->assertSame('regi35@terra.com.br', $cliente->getEmail());
	}
}