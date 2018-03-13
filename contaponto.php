<?php

echo "<pre>";
class Conta{

	public $nroConta;
	public $saldo;
	public $titular;

	public function verTitular(){
		echo" O titular da conta é :" .$this->titular;
	}

	public function verSaldo(){
		return "o Saldo atual é R$". $this->saldo;
	}

	public function sacar($qtdSacar){
		$this->saldo -= $qtdSacar;
	}

	public function depositar ($qtdDeposito){
		$this->saldo +=$qtdDeposito;
	}

}
	$conta = new Conta();
	$conta-> titular ="Roberto";
	echo $conta->verTitular();
	$conta-> saldo="900";
	echo $conta->verSaldo(). "<br>";
	$conta->sacar(425.12);
	echo $conta->verSaldo();
	$conta->depositar(1032.56) ."<br>";
	echo $conta->verSaldo(). "<br>";



