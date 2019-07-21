<?php
class loginController extends controller {
	private $conn;

	public function __construct(){
		global $conn;
		$this->conn = $conn;
	}
	public function index() {
		$data = array();
		if (isset($_POST['username']) && !empty($_POST['username'])) {
			
			$username = addslashes($_POST['username']);
			$password = addslashes(MD5($_POST['password']));


			$query = "SELECT * FROM users WHERE username = :username AND password = :password";
			$sql = $this->conn->prepare($query);
			$sql->bindValue(":username",$username);
			$sql->bindValue(":password",$password);
			$sql->execute();

			if($sql->rowCount()>0){
				$idSession = $sql->fetch();
				$_SESSION['userOn'] = $idSession['id'];
				header("Location:".BASE_URL);
			}

		}
		$this->loadView('login', $data);
	}

}