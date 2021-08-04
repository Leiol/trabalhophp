<?php
  class Pagamentos{
	  private $valor;
	  private $data;
	  private $financeira;
	  private $nome;
	  
	  public function __construct($a, $b, $c, $d){
		  $this->valor = $a;	
		  $this->data = $b;
		  $this->financeira = $c;
		  $this->nome = $d;
	  } 
	 	  
	  public function setValor($n){
		$this->valor = $n;  
	  }  
	  
	  public function getValor(){
		return $this->valor;  
	  }	  
	  
	  public function setData($n){
		$this->data = $n;  
	  }  
	  
	  public function getData(){
		return $this->data; 
	  }
	  
	  public function setFinanceira($n){
		$this->financeira = $n;  
	  }  
	  
	  public function getFinanceira(){
		return $this->financeira; 
	  }
	  public function setNome($n){
		$this->nome = $n;  
	  }  
	  
	  public function getNome(){
		return $this->nome; 
	  }
	  	    
	  public function __toString(){
		return "<b>Valor do pagamento:</b>".$this->nome . "<b>Data do pagamento:</b>".$this->valor."<b>Financeira:</b>".$this->financeira . "<b>Nome:</b>".$this->nome;
	  }	  
	  
  }