<?php 

	class final{
		public $num1;
		public $num2;
		public $Resultado;
		public final function GetResultado(){
			return $this->Resultado;
		}
		public final function SetResultado($n1,$n2){
			$this->num1=$n1;
			$this->num2=$n2;

			$this->Resultado=$num1 + $num2;
		}
		class FinalExtends extends final(){

		}
	}

	$fi = new FinalExtends();
	$fi->SetResultado(4,3);
	$fi->GetResultado();