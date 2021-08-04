<?php
  class Turma{
	  private $disciplina;
	  private $professor;
	  private $nome;
	 
	  
	  public function __construct($a, $b, $c){
		  $this->disciplina = $a;	
		  $this->professor = $b;
		  $this->nome = $c;
		  
	  } 
	 	  
	  public function setDisciplina($n){
		$this->disciplina = $n;  
	  }  
	  
	  public function getDisciplina(){
		return $this->disciplina;  
	  }	  
	  
	  public function setProfessor($n){
		$this->professor = $n;  
	  }  
	  
	  public function getProfessor(){
		return $this->professor; 
	  }
	  public function setNome($n){
		$this->nome = $n;  
	  }  
	  
	  public function getNome(){
		return $this->nome; 
	  }
	  
	  
	  public function __toString(){
		return "<b>Disciplina:</b>".$this->disciplina . "<b>Professor:</b>".$this->professor . "<b>Nome:</b>".$this->nome;
	  }	  
	  
  }