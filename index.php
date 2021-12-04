<?php

	/* Função de espaçamento, simplesmente visual */
	function espacoBr($size){
		for($i=0 ; $i<$size ; $i++){
			echo '<br>';
		}
	}


	/* FUNÇÃO 1 */
	echo 'Função 1, seculoAno($ano)';
	echo '<br>';
	$ano = 2021;
	echo 'Ano: '.$ano.' | Século: '.seculoAno($ano);

	function seculoAno($ano){
		return ceil($ano / 100);
	}
	espacoBr(4);


	/* FUNÇÃO 2 */
	echo 'Função 2, primoInferior($num)';
	echo '<br>';
	$num = 10;
	echo 'Númeo: '.$num.' | Primo inferior: '.primoInferior($num);

	function primoInferior($num){
		$primo_inferior = 0;

		//Só iremos verificar se for um número maior que 2, já que do 1 para baixo não há número primo
		if($num > 2){
			for($i=$num-1 ; $i>1 ; $i--){
				$is_numeo_primo = isNumeroPrimo($i);

				if($is_numeo_primo){
					$primo_inferior = $i;
					break;
				}
			}
		}

		return $primo_inferior;
	}
	function isNumeroPrimo($num){
		$count_divisores = 0;

		for($i=1 ; $i<=$num ; $i++){
			if($num % $i == 0){
				$count_divisores++;
			}
		}

		if($count_divisores > 2){
			return false;
		}
		return true;
	}
	espacoBr(4);


	/* FUNÇÃO 3 */
	echo 'Função 3, contadorRepeticaoArray()';
	echo '<br>';
	contadorRepeticaoArray();

	function contadorRepeticaoArray(){
		$array_integer = gerarArrayInteger(20);
		echo 'Array gerado: ';
		imprimirArrayInteger($array_integer);
		echo '<br>';

		var_dump(array_count_values($array_integer));
	}
	function gerarArrayInteger($quantidade){
		$array_integer = [];

		for($i=0 ; $i<$quantidade ; $i++){
			$array_integer[] = rand(1, 10);
		}

		return $array_integer;
	}
	function imprimirArrayInteger($array_integer){
		echo '[';

		for($i=0 ; $i<sizeof($array_integer) ; $i++){
			if($i<sizeof($array_integer) - 1){
				echo $array_integer[$i].', ';
			}else{
				echo $array_integer[$i].']';
			}
		};
	}
	espacoBr(4);

?>