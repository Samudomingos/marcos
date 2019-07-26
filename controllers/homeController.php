<?php
class homeController extends controller {

	public function __construct(){

	if(!isset($_SESSION['userOn'])){
			header("Location: ".BASE_URL.'login');
		}
	}
	public function index() {
		$data = array();
		$usuario = new Usuario();
		$user = $usuario->select();
		$request = $_REQUEST;


		$quantidade = count($user);

		$columns = array(
			array('0'=>'img'),
			array('1'=>'nome'),
			array('2'=>'email'),
			array('3'=>'cpf'),
			array('4'=>'dt_nasc'),
			array('5'=>'telefone'),
			array('6'=>'telefone'),
			array('7'=>'salario')

		);


		$this->loadTemplate('home', $data);
	}

}