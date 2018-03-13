<?php 
 
echo "<pre>";

 class carro
 {
 	public $cor;
 	public $marca;
 	public $modelo;
 	public $velocidade;

 	public function buzinar(){
 		echo "Estou buzinando";
 	}

 	public function acelerar (){
 			$this -> velocidade +=35;
 	}
 	public function frear (){
 			$this -> velocidade -=10;
 	}
 }
 
 $uno = new carro();
 $uno->cor ="Azul";
 $uno->marca = "Fiat";
 $uno->modelo = "Uno 1.0";
 $uno->buzinar();
 $uno->acelerar();
 $uno->acelerar();
 $uno->acelerar();

 echo "Velocidade Atual: " . $uno->velocidade . "<br>"; 
 
 $uno->frear();

 echo "Velocidade Atual:" . $uno->velocidade . "<br>" ;


 $gol = new carro(); 
 $gol -> cor = "Preto";
 $gol ->marca="WV";
 $gol ->modelo="Gol 5 Ger 1.4";

 var_dump($uno);