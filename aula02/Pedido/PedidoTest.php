<?php 
//PedidoTest.php
require_once 'Pedido.php';

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;
	public function setUp()
	{
		$this->estoque = $this->getMockBuilder('Estoque')->getMock();
		$this->estoque->add("Blusa X",10);
		$this->estoque->add("Blusa Y",5);
	}
	public function testDeveFecharPedido()
	{
		$item = "Blusa X";
		$qtd  = 10;
		$this->estoque->expects($this->once())
				->method("get")
				->with($this->equalTo($item))
				->will($this->returnValue($qtd));
		$this->estoque->expects($this->once())
				->method("remove")
				->with(
						$this->equalTo($item),
						$this->equalTo($qtd)
					);
		$pedido = new Pedido($item, $qtd);
		$pedido->fechar($this->estoque);
		$this->assertTrue($pedido->isFinalizado());
	}
}