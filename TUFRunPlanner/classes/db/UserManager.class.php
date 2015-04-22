<?php

	class UserManager {
		
		private $dbManager;

		private $STMT_GET_USER_BY_NAME = "SELECT username, profileId, active, lastLoggedIn FROM user WHERE username = ?";
		private $STMT_GET_USERPROFILE_BY_ID = "SELECT characterName, doaSingletankPositionsId, doaDualtankPositionsId, uwPositionsId FROM user_profile WHERE id = ?";
		private $STMT_GET_DOA_SINGLE_POSITIONS_BY_ID = "SELECT canBeMaintank, canBeCaller, canBeTK, canBeEmpathy, canBeBackfire, canBeUA, canBeSeeder, canBeBonder, wantsTeachAsMaintank, wantsTeachAsCaller, wantsTeachAsTK, wantsTeachAsEmpathy, wantsTeachAsBackfire, wantsTeachAsUA, wantsTeachAsSeeder, wantsTeachAsBonder FROM user_doa_single_positions WHERE id = ?";
		private $STMT_GET_DOA_DUAL_POSITIONS_BY_ID = "SELECT canBeMaintank, canBeTrenchtank, canBeCaller, canBeTK, canBeBackfire, canBeEmpathy, canBeSeeder, canBeBonder, wantsTeachAsMaintank, wantsTeachAsTrenchtank, wantsTeachAsCaller, wantsTeachAsTK, wantsTeachAsBackfire, wantsTeachAsEmpathy, wantsTeachAsSeeder, wantsTeachAsBonder FROM user_doa_dual_positions WHERE ID = ?";
		
		public function __construct() {
			$this->dbManager = new DatabaseManager();
		}
		
		private function prepareStatement($stmt) {
			return $this->dbManager->getConnection()->prepare($stmt);
		}
		
		public function getUserByName($name) {
			$stmt = $this->prepareStatement($this->STMT_GET_USER_BY_NAME);
			$stmt->bind_param("s", $name);
			
			if(!$result = $stmt->execute()) {
				echo "Error while executing the statement: " . $stmt->errno;
			}
			
			while($obj = $result->fetch_object()) {
				
				$userprofile = null;
				if($obj->profileId != null) {
					$userprofile = $this->getUserProfile($obj->profileId);
				}
				
				return new User($obj->username, $userprofile, $obj->active, $obj->lastLoggedIn);
							
			}
			
		}
		
		public function getUserProfile($profileId) {
			$stmt = $this->prepareStatement($this->STMT_GET_USERPROFILE_BY_ID);
			$stmt->bind_param("i", $profileId);
			
			if(!$result = $stmt->fetch_object()) {
				echo "Error while executing the statement: " . $stmt->errno;
			}

			$doaSingletankPositions = null;
			if($obj->doaSingletankPositionsId != null) {
				$doaSingletankPositions = $this->getDoASingletankPositions($obj->doaSingletankPositionsId);
			}
			
			$doaDualtankPositions = null;
			if($obj->doaDualtankPositionsId != null) {
				$doaDualtankPositions = $this->getDoADualtankPositions($obj->doaDualtankPositionsId);
			}
			
			$uwPositions = null;
			if($obj->uwPositionsId != null) {
				$uwPositions = $this->getUWPositions($obj->uwPositionsId);
			}
			
			return new UserProfile($obj->characterName, $doaSingletankPositions, $doaDualtankPositions, $uwPositions);
		}
		
		public function getDoASingletankPositions($posId) {
			$stmt = $this->prepareStatement($this->STMT_GET_DOA_SINGLE_POSITIONS_BY_ID);
			$stmt->bind_param("i", $posId);
			
			if(!$result = $stmt->fetch_object()) {
				echo "Error while executing the statement: " . $stmt->errno;
			}
			
			$pos = new DoASingletankPositions();
			
			$pos->setCanBeMaintank($obj->canBeMaintank);
			$pos->setCanBeCaller($obj->canBeCaller);
			$pos->setCanBeTK($obj->canBeTK);
			$pos->setCanBeBackfire($obj->canBeBackfire);
			$pos->setCanBeEmpathy($obj->canBeEmpathy);
			$pos->setCanBeUA($obj->canBeUA);
			$pos->setCanBeSeeder($obj->canBeSeeder);
			$pos->setCanBeBonder($obj->canBeBonder);
			
			$pos->setWantsToBeMaintank($obj->wantsTeachAsMaintank);
			$pos->setWantsToBeCaller($obj->wantsTeachAsCaller);
			$pos->setWantsToBeTK($obj->wantsTeachAsTK);
			$pos->setWantsToBeBackfire($obj->wantsTeachAsBackfire);
			$pos->setWantsToBeEmpathy($obj->wantsTeachAsEmpathy);
			$pos->setWantsToBeUA($obj->wantsTeachAsUA);
			$pos->setWantsToBeSeeder($obj->wantsTeachAsSeeder);
			$pos->setWantsToBeBonder($obj->wantsTeachAsBonder);
			
			return $pos;
		}
		
		public function getDoADualtankPositions($posId) {
			$stmt = $this->prepareStatement($this->STMT_GET_DOA_DUAL_POSITIONS_BY_ID);
			$stmt->bind_param("i", $posId);
				
			if(!$result = $stmt->fetch_object()) {
				echo "Error while executing the statement: " . $stmt->errno;
			}
				
			$pos = new DoADualtankPositions();
			
			$pos->setCanBeMaintank($obj->canBeMaintank);
			$pos->setCanBeTrenchtank($obj->canBeTrenchtank);
			$pos->setCanBeCaller($obj->canBeCaller);
			$pos->setCanBeTK($obj->canBeTK);
			$pos->setCanBeBackfire($obj->canBeBackfire);
			$pos->setCanBeEmpathy($obj->canBeEmpathy);
			$pos->setCanBeSeeder($obj->canBeSeeder);
			$pos->setCanBeBonder($obj->canBeBonder);
				
			$pos->setWantsToBeMaintank($obj->wantsTeachAsMaintank);
			$pos->setWantsToBeTrenchtank($obj->wantsToBeTrenchtank);
			$pos->setWantsToBeCaller($obj->wantsTeachAsCaller);
			$pos->setWantsToBeTK($obj->wantsTeachAsTK);
			$pos->setWantsToBeBackfire($obj->wantsTeachAsBackfire);
			$pos->setWantsToBeEmpathy($obj->wantsTeachAsEmpathy);
			$pos->setWantsToBeSeeder($obj->wantsTeachAsSeeder);
			$pos->setWantsToBeBonder($obj->wantsTeachAsBonder);
				
			return $pos;
		}
		
	}