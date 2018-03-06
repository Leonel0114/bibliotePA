<?php
class SQL{
private $server = "localhost";
private $user ="root";
private $pass ="";
private $dbname="bibliotecaPA";
private $conn="";
private $error="";

		function start(){
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
		$this->conn->set_charset("utf8");
		return $this->conn;
		}

		function closeConection(){
			$this->conn->close();
		}

		function insert($sql){
			$this->conn->query($sql);
		}

		function select($sql){
			return $this->conn->query($sql);
		}

		function update($sql){
			$this->conn->query($sql);
		}

		function delete($sql){
			$this->conn->query($sql);
		}
}

?>