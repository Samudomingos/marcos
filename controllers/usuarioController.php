<?php
class usuarioController extends controller {

	private $mpdf;
	private $usuario;

	public function __construct(){

	if(!isset($_SESSION['userOn'])){
			header("Location: ".BASE_URL.'login');
		}
		require_once './vendor/autoload.php';

		$this->mpdf = new Mpdf\Mpdf();
		$this->usuario = new Usuario();
	}

	public function index() {
		 require_once './vendor/autoload.php';
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

	public function visualizar($id){
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

		$this->loadTemplate('visualizar', $data);


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
			$salario = $_POST['salario'];
			$salario = str_replace('.', '', $salario);
			$salario = str_replace(',', '.', $salario);

			$usuario->update($user['id'],$_POST['nome'], $_POST['cpf'], $_POST['dt_nasc'], $_POST['tel'], $_POST['email'], $salario, $tmpname);
		}

		$this->loadTemplate('editar', $data);
	}

	public function excluir($id){
		$this->usuario->deletar($id);
		$data = array();
		
	}

	public function pdf(){
		$data = array();
		 
		$data['clients'] = $this->usuario->select();;
		$data['pdf'] = $this->mpdf;
		$this->loadView('pdf',$data);
	}

	public function deslogar(){
		session_unset();
		header("Location:".BASE_URL);
	}

	public function excel(){
		$data = array();
		$data['clients'] = $this->usuario->select();;
		$this->loadView('excel',$data);
	}

}