<?php

class Sql extends PDO {
// Extendendo a Classe nativa PDO já habilita a Classe para realizar os métodos públicos do PDO
	
	private $conn;
	
	public function __construct(){
		//É feita a conexão ao banco de dados automaticamente ao instanciar a classe
		
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		
	}
	
	private function setParams($statement, $parameters = array()){
		
		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);
		}
	
	}
	
	private function setParam($statement, $key, $value){
		
		$statement->bindParam($key, $value);
		
	}
		
	
	public function query($rawQuery, $params = array()){
		
		$stmt = $this->conn->prepare($rawQuery);
		
		$this->setParams($stmt, $params);
		
		$stmt->execute();
		
		return $stmt;
		
	}
	
	public function select($rawQuery, $params = array()):array {
		
		$stmt = $this->query($rawQuery, $params);
		
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
		
	}
}

?>