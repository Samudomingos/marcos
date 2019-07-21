<?php
class homeController extends controller {

	public function __construct(){

	if(!isset($_SESSION['userOn'])){
			header("Location: ".BASE_URL.'login');
		}
	}
	public function index() {
		$data = array();
		$usuario = new usuario();
		$data['clients'] = $usuario->select();
		$this->loadTemplate('home', $data);
	}

}