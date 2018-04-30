<?php
	spl_autoload_register(function($className) {
		include_once $_SERVER['DOCUMENT_ROOT'] . "/marcos/bll/core/" .  $className . '.php';
	});

	spl_autoload_register(function($className) {
		include_once $_SERVER['DOCUMENT_ROOT'] .  "/marcos/bll/models/".  $className . '.php';
	});

	spl_autoload_register(function($className) {
		include_once $_SERVER['DOCUMENT_ROOT'] .  "/marcos/bll/" . $className . '.php';
	});

	spl_autoload_register(function($className) {
		include_once $_SERVER['DOCUMENT_ROOT'] .  "/marcos/dal/" . $className . '.php';
	});

?>
