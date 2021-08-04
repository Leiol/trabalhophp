<?php
  class Avaliacao{
	  private $nota1;
	  private $nota2;
	  private $matricula;
	  
	  public function __construct($a, $b, $c){
		  $this->nota1 = $a;	
		  $this->nota2 = $b;
		  $this->matricula = $c;
		  
	  } 
	 	  
	  public function setNota1($n){
		$this->nota1 = $n;  
	  }  
	  
	  public function getNota1(){
		return $this->nota1;  
	  }	  
	  
	  public function setNota2($n){
		$this->nota2 = $n;  
	  }  
	  
	  public function getNota2(){
		return $this->nota2; 
	  }
	  
	  public function setMatricula($n){
		$this->matricula = $n;  
	  }  
	  
	  public function getMatricula(){
		return $this->matricula; 
	  }
	  
	  public function __toString(){
		return "<b>Nota 1:</b>".$this->nota1 . "<b>Nota 2:</b>".$this->nota2 . "<b>Matrícula:</b>".$this->matricula;
	  }	  
	  
  }