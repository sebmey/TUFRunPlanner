<?php
	class UserProfile {
			
		private $characterName;
		private $doaSingletankPositions;
		private $doaDualtankPositions;
		private $uwPositions;
		
		public function __construct($characterName, $doaSingletankPositions, $doaDualtankPositions, $uwPositions) {
			$this->characterName = $characterName;
			$this->doaSingletankPositions = $doaSingletankPositions;
			$this->doaDualtankPositions = $doaDualtankPositions;
			$this->uwPositions = $uwPositions;
		}
		
		public function getCharacterName() {
			return $this->characterName;
		}
		
		public function setCharacterName($characterName) {
			$this->characterName = $characterName;
		}
		
		public function getDoaSingletankPositions() {
			return $this->doaSingletankPositions;
		}
		
		public function setDoaSingletankPositions($doaSingletankPositions) {
			$this->doaSingletankPositions = $doaSingletankPositions;
		}
		
		public function getDoaDualtankPositions() {
			return $this->doaDualtankPositions;
		}
		
		public function setDoaDualtankPositions($doaDualtankPositions) {
			$this->doaDualtankPositions = $doaDualtankPositions;
		}
		
		public function getUwPositions() {
			return $this->uwPositions;
		}
		
		public function setUwPositions($uwPositions) {
			$this->uwPositions = $uwPositions;
		}
		
	}
?>