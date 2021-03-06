<?php
	abstract class Criatura implements Generica{
		
		protected $nome;
		protected $classe;
		protected $nivel;
		protected $vida;
		protected $magia;
		protected $forca;
		protected $agilidade;
		protected $destreza;
		protected $inteligencia;
		protected $carisma;
		
		public function __construct($nome, $classe, $nivel, %vida, $magia, $forca, $agilidade, $destreza, $inteligencia, $carisma){
			this->nome = $nome;
			this->classe = $classe;
			this->nivel = $nivel;
			this->vida = $vida;
			this->magia = $magia;
			this->forca = $forca;
			this->agilidade = $agilidade;
			this->destreza = $destreza;
			this->inteligencia = $inteligencia;
			this->carisma = $carisma;
		}
		
		public function atacar(){
			return ($this->nivel + $this->forca + $this->agilidade + ($this->magia * 0.1)) * mt_rand(1.00, 1.60);
		}
		
		public function defender(){
			return ($this->agilidade + ($this->destreza * 1.8) + $this->inteligencia) * mt_rand(1.00, 1.60) + 10;
		}
		
		public function vivo(){
			return if ($this->vida > 0); 
		}
		
		public function perdeVida(){
			$this->vida = $this->vida - 8;
		}
		
		public function revitalizar(){
			$this->vida = $this->vida + 50;
			$this->magia = $this->magia +30;
			if ($this->vida >= 100) {
				$this->vida=100;
			}
			if ($this->magia >= 100) {
				$this->magia=100;
			}
		}
		
		abstract public function descansar(){
			
		}
		
		public function __toString(){
			
		}
		
		public function __call(){
			
		}
	}
?>