<?php 
	class tabla{
		public $nf;
		public $nc;

		public function __construct($nf,$nc){
			$this->nf = $nf;
			$this->nc = $nc;
		}

		public function drawTable(){
			echo "<table border='1'>";
			
			for ($i=1; $i <= $this->nf ; $i++) { 
						$this->drawRowStart();
				for ($j=1; $j <= $this->nc ; $j++) { 
					$this->drawCells($i,$j);


				}
				$this->drawRowEnd();
			}
			echo "</table>";
		}

		private function drawRowStart(){
			echo "<tr>";
		}
		private function drawCells($i,$j){
			echo "<td>".$i."--".$j."</td>";
		}
		private function drawRowEnd(){
			echo "</tr>";
		}
	}
	
	$tb = new tabla(8,6);
	$tb->drawTable();

	

