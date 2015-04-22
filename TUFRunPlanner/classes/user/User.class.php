<?php

	class User {
		
		private $username;
		private $profile;
		private $active;
		private $lastLoggedIn;

		public function __construct($username, $profile, $active, $lastLoggedIn) {
			$this->username;
			$this->profile;
			$this->active;
			$this->lastLoggedIn;
		}
		
		public function getUsername() {
			return $this->username;
		}
		
		public function setUsername($username) {
			$this->username = $username;
		}
		
		public function getProfile() {
			return $this->profile;
		}
		
		public function setProfile($profile) {
			$this->profile = $profile;
		}
		
		public function isActive() {
			return $this->active;
		}
		
		public function setActive($active) {
			$this->active = $active;
		}
		
		public function getLastLoggedIn() {
			return $this->lastLoggedIn;
		}
		
		public function setLastLoggedIn($lastLoggedIn) {
			$this->lastLoggedIn = $lastLoggedIn;
		}
		
	}
?>