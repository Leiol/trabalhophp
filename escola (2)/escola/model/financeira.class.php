<?php
  class Financeira{
	  private $aluno;
	  private $curso;
	  private $nome;
	  
	  public function __construct($a, $b, $c){
		$this->aluno = $a;
		$this->curso = $b;	
		$this->nome = $c;
	  } 
	 	  
	  public function setAluno($n){
		$this->aluno = $n;  
	  }  
	  
	  public function getAluno(){
		return $this->aluno;  
	  }	  
	  	    
	 public function setCurso($n){
		$this->curso = $n;
	  }	  
	  
	  public function getCurso(){
		return $this->curso;  
	  }	  	  
	  public function setNome($n){
		$this->nome = $n;
	  }	  
	  
	  public function getNome(){
		return $this->nome;  
	  }	  	  
	  	    
	  public function __toString(){
		return "<b>Aluno:</b>".$this->aluno . "do <b>Curso Tal</b>".$this->curso . "<b>Nome:</b>".$this->nome;
	  }	  
	  
  }
?>