<?php
	
	class DatabaseManager {
		private $connection;
		
		public function getConnection() {
			if($this->connection == null) {
				$this->connect();
			}
			return $this->connection;
		}
		
		private function connect() {
			$this->connection = new mysqli($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
		}
			
	}


?>