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

		if(isset($_FILES['importData']) && !empty($_FILES['importData'])){
			$arquivo = new DomDocument();
			$arquivo->load($_FILES['importData']['tmp_name']);

			var_dump($arquivo);
			exit;
		}
		$this->loadTemplate('home', $data);
	}

}