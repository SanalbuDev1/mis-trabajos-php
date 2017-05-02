<?php 	
		class operacion{
			protected $num1;
			protected $num2;
			protected $res;

			public function __construct($n1,$n2){
					$this->num1=$n1;
					$this->num2=$n2;
			}

			public function getOperacion(){
					return $this-> res;
			}
		}

		class suma extends operacion{
			public function calcular(){
				$this->res=$this->num1+$this->num2;				
			}

		}

		class resta extends operacion{
		public function calcular(){
				$this->res=$this->num1-$this->num2;				
			}
		}

		$op = new suma(3,4);
		$op->calcular();
		echo "La suma dio".$op->getOperacion()."<br>";


		$op = new resta(3,4);
		$op->calcular();
		echo "La resta dio".$op->getOperacion();

		
