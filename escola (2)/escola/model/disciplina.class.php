<?php
  class Disciplina{
	  private $nome;
	  private $sala;
	  
	  public function __construct($a, $b){
		  $this->nome = $a;
		  $this->sala = $b;
	  } 
	 	  
	  public function setNome($n){
		$this->nome = $n;  
	  }  
	  
	  public function getNome(){
		return $this->nome;  
	  }	  
	  
	  public function setSala($n){
		$this->sala = $n;  
	  }  
	  
	  public function getSala(){
		return $this->sala;  
	  }
	  public function __toString(){
		return "<b>Disciplina:</b>".$this->nome."<b>Sala:</b>".$this->sala;
	  }	  
	  
  }
?>