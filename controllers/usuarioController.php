<?php
class usuarioController extends controller {

	public function __construct(){

	if(!isset($_SESSION['userOn'])){
			header("Location: ".BASE_URL.'login');
		}
	}

	public function index() {
		$data = array();
		$usuario = new Usuario();
		if(
			isset($_POST['nome']) && !empty($_POST['nome']) 
			&& isset($_POST['cpf']) && !empty($_POST['cpf']) 
			&& isset($_POST['dt_nasc']) && !empty($_POST['dt_nasc']) 
			&& isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['tel']) && !empty($_POST['tel']) 
			&& isset($_POST['email']) && !empty($_POST['email']) 
			&& isset($_POST['salario']) && !empty($_POST['salario']))
		{
			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$dt_nasc = addslashes($_POST['dt_nasc']);
			$tel = addslashes($_POST['tel']);
			$email = addslashes($_POST['email']);
			$salario = addslashes($_POST['salario']);
			$salario = str_replace('.', '', $salario);
			$salario = str_replace(',', '.', $salario);

			if (isset($_FILES['foto'])) {
				$foto = $_FILES['foto'];
				$tipo = $foto['type'];
				
				$tmpname = $usuario->geraImagem($foto,$tipo);
			}

			
			$usuario->insert($nome,$cpf,$dt_nasc,$tel,$email,$salario,$tmpname);
		}

		$this->loadTemplate('usuarios', $data);
	}

	public function alterar($id){
		$data = array();
		$usuario = new Usuario();
		$user = $usuario->getUsuario($id);

		$data['nome'] = $user['nome'];
		$data['cpf'] = $user['cpf'];
		$data['dt_nasc'] = $user['dt_nasc'];
		$data['telefone'] = $user['telefone'];
		$data['email'] = $user['email'];
		$data['salario'] = $user['salario'];
		$data['img'] = $user['img'];

		if(
			isset($_POST['nome']) && !empty($_POST['nome']) 
			&& isset($_POST['cpf']) && !empty($_POST['cpf']) 
			&& isset($_POST['dt_nasc']) && !empty($_POST['dt_nasc']) 
			&& isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['tel']) && !empty($_POST['tel']) 
			&& isset($_POST['email']) && !empty($_POST['email']) 
			&& isset($_POST['salario']) && !empty($_POST['salario']))
		{
			if(isset($_FILES['foto']['tmp_name']) && !empty($_FILES['foto']['tmp_name'])){
				$foto = $_FILES['foto'];
				$tipo = $foto['type'];

				$tmpname = $usuario->geraImagem($foto,$tipo,$user['img']);

			}else{
				$tmpname = $user['img'];
			}

			$usuario->update($user['id'],$_POST['nome'], $_POST['cpf'], $_POST['dt_nasc'], $_POST['tel'], $_POST['email'], $_POST['salario'], $tmpname);
		}

		$this->loadTemplate('editar', $data);
	}

}