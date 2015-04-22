<?php
	
	class DoASingletankPositions {
		
		private $canBeMaintank;
		private $canBeCaller;
		private $canBeTK;
		private $canBeEmpathy;
		private $canBeBackfire;
		private $canBeUA;
		private $canBeSeeder;
		private $canBeBonder;
		
		private $wantsTeachAsMaintank;
		private $wantsTeachAsCaller;
		private $wantsTeachAsTK;
		private $wantsTeachAsEmpathy;
		private $wantsTeachAsBackfire;
		private $wantsTeachAsUA;
		private $wantsTeachAsSeeder;
		private $wantsTeachAsBonder;
		
		public function isMaintank() {
			return $this->canBeMaintank;
		}
		
		public function setCanBeMaintank($canBeMaintank) {
			$this->canBeMaintank = $canBeMaintank;
		}
		
		public function isCaller() {
			return $this->canBeCaller;
		}
		
		public function setCanBeCaller($canBeCaller) {
			$this->canBeCaller = $canBeCaller;
		}
		
		public function isTK() {
			return $this->canBeTK;	
		}
		
		public function setCanBeTK($canBeTK) {
			$this->canBeTK = $canBeTK;
		}
		
		public function isEmpathy() {
			return $this->canBeEmpathy;
		}
		
		public function setCanBeEmpathy($canBeEmpathy) {
			$this->canBeEmpathy = $canBeEmpathy;	
		}
		
		public function isBackfire() {
			return $this->canBeBackfire;
		}
		
		public function setCanBeBackfire($canBeBackfire) {
			$this->canBeBackfire = $canBeBackfire;
		}
		
		public function isUA() {
			return $this->canBeUA;
		}
		
		public function setCanBeUA($canBeUA) {
			$this->canBeUA = $canBeUA;	
		}
		
		public function isSeeder() {
			return $this->canBeSeeder;
		}
		
		public function setCanBeSeeder($canBeSeeder) {
			$this->canBeSeeder = $canBeSeeder;
		}
		
		public function isBonder() {
			return $this->canBeBonder;
		}
		
		public function setCanBeBonder($canBeBonder) {
			$this->canBeBonder = $canBeBonder;
		}
		
		public function isMaintankTeach() {
			return $this->wantsTeachAsMaintank;
		}
		
		public function setWantsToBeMaintank($wantsTeachAsMaintank) {
			$this->wantsTeachAsMaintank = $wantsTeachAsMaintank;
		}
		
		public function isCallerTeach() {
			return $this->wantsTeachAsCaller;
		}
		
		public function setWantsToBeCaller($wantsTeachAsCaller) {
			$this->wantsTeachAsCaller = $wantsTeachAsCaller;
		}
		
		public function isTKTeach() {
			return $this->wantsTeachAsTK;
		}
		
		public function setWantsToBeTK($wantsTeachAsTK) {
			$this->wantsTeachAsTK = $wantsTeachAsTK;
		}
		
		public function isEmpathyTeach() {
			return $this->wantsTeachAsEmpathy;
		}
		
		public function setWantsToBeEmpathy($wantsTeachAsEmpathy) {
			$this->wantsTeachAsEmpathy = $wantsTeachAsEmpathy;
		}
		
		public function isBackfireTeach() {
			return $this->wantsTeachAsBackfire;
		}
		
		public function setWantsToBeBackfire($wantsTeachAsBackfire) {
			$this->wantsTeachAsBackfire = $wantsTeachAsBackfire;
		}
		
		public function isUATeach() {
			return $this->wantsTeachAsUA;
		}
		
		public function setWantsToBeUA($wantsTeachAsUA) {
			$this->wantsTeachAsUA = $wantsTeachAsUA;
		}
		
		public function isSeederTeach() {
			return $this->wantsTeachAsSeeder;
		}
		
		public function setWantsToBeSeeder($wantsTeachAsSeeder) {
			$this->wantsTeachAsSeeder = $wantsTeachAsSeeder;
		}
		
		public function isBonderTeach() {
			return $this->wantsTeachAsBonder;
		}
		
		public function setWantsToBeBonder($wantsTeachAsBonder) {
			$this->wantsTeachAsBonder = $wantsTeachAsBonder;
		}
		
	}

?>