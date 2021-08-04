<?php
  class Matricula{
	  private $aluno;
	  private $turma;
	  private $nome;
	  
	  public function __construct($a, $b, $c){
		  $this->aluno = $a;	
		  $this->turma = $b;
		  $this->nome = $c;
	  } 
	 	  
	  public function setAluno($n){
		$this->aluno = $n;  
	  }  
	  
	  public function getAluno(){
		return $this->aluno;  
	  }	  
	  
	  public function setTurma($n){
		$this->turma = $n;  
	  }  
	  
	  public function getTurma(){
		return $this->turma; 
	  } 
	  public function setNome($n){
		$this->nome = $n;  
	  }  
	  
	  public function getNome(){
		return $this->nome; 
	  }
	  
	  public function __toString(){
		return "<b>Aluno:</b>".$this->aluno . "<b>Turma:</b>".$this->turma. "<b>Nome</b>".$this->nome;
	  }	  
	  
  }