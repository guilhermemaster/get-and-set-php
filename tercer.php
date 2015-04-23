<?php
	class segun{
		public $pega;
		function setvalor($valor){
			$this->pega=$valor;
		}

		function getvalor(){
			return $this->pega;
		}

		function mult($valor){
			$this->pega=$this->pega*$valor;
		}

	}
?>