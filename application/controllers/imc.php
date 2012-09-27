<?php

class Imc extends CI_Controller{

	function index(){
		$this->load->view('index');
	}

	function calcular(){
		$imc = 0;	
		$tipo = "";	
		$operacion ="";
		$estatura = $_POST['estatura'];
		$peso = $_POST['peso'];

		if ($estatura == "" && $peso == "") {
			$imc = "Debe introducir su peso y estatura";
		}					
		else{
			$operacion = 'Operacion <br />'.$peso.'kg / ('.$estatura.'m)²';
			$imc = number_format($peso / ($estatura * $estatura),2);
			$tipo = $this->tipoIMC($imc);
		}

		$data['operacion'] = $operacion;
		$data['imc'] = 'IMC: '.$imc;
		$data['tipo'] = $tipo;

		$this->load->view('index',$data);
	}

	public function tipoIMC($imc){
		$msj = "";

		if($imc >= 25){//Obesos			
			if ($imc < 30)
				$msj = "Eres Preobeso";
			elseif ($imc < 35) 
				$msj = "Eres Obeso Tipo I";
			elseif ($imc < 40)
				$msj = "Eres Obeso Tipo II";
			else
				$msj = "Eres Obeso Tipo III";
		}

		else{//Delgados y Normal
			if($imc < 16)
				$msj = "Tienes Delgadez Severa";
			elseif ($imc < 17)
				$msj = "Tienes Delgadez Moderada";
			elseif ($imc < 18.5)
				$msj = "Tienes Delgadez no muy pronunciada";
			else
				$msj = "Tienes un IMC Normal";
		}


		return $msj;
	}



}