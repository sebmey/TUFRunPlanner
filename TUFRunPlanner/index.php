<?php
	/*Directories that contain classes*/
	$classesDir = array (
			ROOT_DIR.'classes/',
			ROOT_DIR.'classes/user/',
			ROOT_DIR.'classes/db/',
			ROOT_DIR.'includes/',
			ROOT_DIR.'main/'
	);
	function __autoload($class_name) {
		global $classesDir;
		foreach ($classesDir as $directory) {
			if (file_exists($directory . $class_name . '.php')) {
				require_once ($directory . $class_name . '.php');
				return;
			}
			if (file_exists($directory . $class_name . '.class.php')) {
				require_once ($directory . $class_name . '.class.php');
				return;
			}
		}
	}
?>