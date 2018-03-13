<?php
echo "<pre>";

class caneta

{
	public $cor;
	public $marca;

	public $tampada;

	public function escrever(string $texto){
		if ($this->tampada){
			echo "Primeiro destampe a caneta";
		}else {
			echo "Estou escrevendo:" . $texto;
		}
	}

	public function destampar(){
		$this->tampada = false;
		}
	public function tampar(){
		$this-> tampar= true; 
	}

}
$caneta1 = new caneta();
$caneta1->cor ="Vermelha";
$caneta1->marca="Bic";
$caneta2 = new caneta();
$caneta2->cor="Azul";
$caneta2->marca="Compactor";


$caneta1-> destampar();
$caneta1-> escrever("jhdjhdsjdhsj");