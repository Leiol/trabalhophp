<?php
  class Funcionario{
	  private $nome;
	  private $escola;
	  private $funcao;
	  
	  public function __construct($a, $b, $c){
		$this->nome = $a;
		$this->escola = $b;	
		$this->funcao = $c;
	  } 
	 	  
	  public function setNome($n){
		$this->nome = $n;  
	  }  
	  
	  public function getNome(){
		return $this->nome;  
	  }	  
	  	    
	 public function setEscola($n){
		$this->escola = $n;
	  }	  
	  
	  public function getEscola(){
		return $this->escola;  
	  }	
	  
	 public function setFuncao($n){
		$this->funcao = $n;
	  }	  
	  
	  public function getFuncao(){
		return $this->funcao;  
	  }	  	  
	  	    
	  public function __toString(){
		return "<b>Funcionrio:</b>".$this->nome . "da <b>Escola de código</b>".$this->escola . "<b>Função do Funcionário:</b>".$this->funcao;
	  }	  
	  
  }
?>