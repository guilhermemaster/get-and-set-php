<?php
	class prime{
		public $pega;
		function setvalor($valor){
			$this->pega=$valor;
		}

		function getvalor(){
			return $this->pega;
		}

		function somar($valor){
			$this->pega=$this->pega+$valor;
		}

	}
?>