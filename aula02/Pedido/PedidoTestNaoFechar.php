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
		
	}

	
		public function testNaoDeveFecharPedido()
	
	{
		$item = "Blusa Y";
		$qtd  = 7;
	
		$this->estoque->expects($this->once())
				->method("get")
				->with($this->equalTo($item))
				->will($this->returnValue(0));
	
		$this->estoque->expects($this->never())
				->method("remove");
	
		$pedido = new Pedido($item, $qtd);
	
		$pedido->fechar($this->estoque);
	
		$this->assertFalse($pedido->isFinalizado());
	}
}