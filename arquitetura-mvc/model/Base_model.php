<?php

require_once 'config/Auto_load_config.php';

/**
* Classe espelho da respectiva tabela no banco de dados.
*/
class Base_model extends Connection_factory
{
	
	#atributos
	private $base_id,
			$base_name,
			$base_insert_date;


	#métodos acessadores
	public function getBaseId(){
		return $this->base_id;
	}

	public function setBaseId($base_id){
		$this->base_id = $base_id;
	}

	public function getBaseName(){
		return $this->base_name;
	}

	public function setBaseName($base_name){
		$this->base_name = $base_name;
	}

	public function getBaseInsertDate(){
		return $this->base_insert_date;
	}

	public function setBaseInsertDate($base_insert_date){
		$this->base_insert_date = $base_insert_date;
	}
}