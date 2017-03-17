<?php 

require_once 'config/Auto_load_config.php';

/**
* Classe para manipular valores na base de dados.
*/
class Base_dao extends Base_model
{

	private $select = "SELECT * FROM Base",
			$insert = "INSERT INTO Base (base_name) VALUES ('%s')",
			$update = "UPDATE Base SET base_name = '%s' WHERE base_id = '%s'",
			$delete = "DELETE FROM Base WHERE base_id = '%s'",
			$slq = "";



			public function InsertBase($base_name){

				$this->setBaseName($base_name);

				$this->sql = sprintf($this->insert, $this->getBaseName());

			    try {

		           $this->runQuery($this->sql);

		        } catch (Exception $e) {

		            echo 'Error: ', $e->getMessage(), "\n";
		            
		        }

			}


			public function updateBase($base_name,$base_id){

				$this->setBaseName($base_name);
				$this->setBaseId($base_id);

				$this->sql = sprintf($this->update, $this->getBaseName(), $this->getBaseId());

			    try {

		           $this->runQuery($this->sql);

		        } catch (Exception $e) {

		            echo 'Error: ', $e->getMessage(), "\n";

		        }

			}

			public function deleteBase($base_id){

			
				$this->setBaseId($base_id);

				$this->sql = sprintf($this->delete, $this->getBaseId());

			    try {

		           $this->runQuery($this->sql);

		        } catch (Exception $e) {

		            echo 'Error: ', $e->getMessage(), "\n";

		        }

			}

			public function selectBase(){

				try {

		            	$row = $this->runSelect("SELECT * FROM Base");

		             	 if(count($row) != 0){

            			    return $row;

       					 } else {

            				echo "Consulta não retornou nenhum resultado. <br/>";
        				 }

			        } catch (Exception $e) {

			            echo 'Error: ', $e->getMessage(), "\n";

			        }


			}

	

}