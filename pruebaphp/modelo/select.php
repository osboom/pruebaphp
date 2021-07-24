<?php

require_once $_SERVER['DOCUMENT_ROOT']."/pruebaphp/config/conex.php";
	
class selects{
	private $db;
	private $regconsultastbl=array();
	
	public function selects(){
		
		$this->db=Conectar::Conexion();
	}
	
	//*******************************************************************************
	//***********************OBTENER Areas**************************
	//*******************************************************************************
	
	public function get_areas(){
		try{
			$sql="SELECT a.`id`, a.`nombre` FROM `areas` a ORDER BY a.`nombre` ASC";
			
			$consulta=$this->db->prepare($sql);
			$consulta->execute();
			if ($consulta->rowCount() > 0) {
				while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
					$this->regconsultastbl[]=$filas;
					 //echo $filas['id']." ".$filas['nombre']."<br>";
				}
				//print_r($this->regconsultastbl);
				return $this->regconsultastbl;
				$consulta->closeCursor();
			}else{
				//echo "error de Empresa <br>";
				return "false";
			}
			
			$consulta="";
			close(db);
		}catch(Exception $e){
			$msjerror="Error de Acceso ".";".$e->getCode().";".$e->getMessage().";".$e->getLine().";".$e->getFile();
			echo $msjerror;
		}
	}
	
	public function get_roles(){
		try{
			$sql="SELECT `id`, `nombre` FROM `roles` ORDER BY `roles`.`id` ASC";
			
			$consulta=$this->db->prepare($sql);
			$consulta->execute();
			if ($consulta->rowCount() > 0) {
				while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
					$this->regconsultastbl[]=$filas;
					 //echo $filas['id']." ".$filas['nombre']."<br>";
				}
				//print_r($this->regconsultastbl);
				return $this->regconsultastbl;
				$consulta->closeCursor();
			}else{
				//echo "error de Empresa <br>";
				return "false";
			}
			
			$consulta="";
			close(db);
		}catch(Exception $e){
			$msjerror="Error de Acceso ".";".$e->getCode().";".$e->getMessage().";".$e->getLine().";".$e->getFile();
			echo $msjerror;
		}
	}
	
}

//$area=new selects();
//$matrizarea=$area->get_areas();

?>