<?php
require 'environment.php';

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://marcos.crud.com/");
	$config['dbname'] = 'marcos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "https://marcos-crud.000webhostapp.com/");
	$config['dbname'] = 'id10250491_marcoss';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'id10250491_marcos';
	$config['dbpass'] = '19082001sh';
}

global $conn;
try {
	$conn = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}