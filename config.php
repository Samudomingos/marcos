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
	define("BASE_URL", "https://samudomingos.com.br/");
	$config['dbname'] = 'samudo79_samudomingos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'samudo79_samu';
	$config['dbpass'] = '@m@nd@1l0v3y0u321';
}

global $conn;
try {
	$conn = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}