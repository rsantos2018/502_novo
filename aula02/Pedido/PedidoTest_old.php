<?php

require_once 'Pedido.php';

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;

	public Function setUp()
	{
		$this->estoque = new Estoque();
		$this->estoque->add('Blusa X', 10);
		$this->estoque->add('Blusa Y', 8);
	}


	public function testDeveFecharPedido()
	{
		$pedido = new Pedido('Blusa X', 4);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
		$this->assertSame(6,$this->estoque->get('Blusa X'));
	}
}


