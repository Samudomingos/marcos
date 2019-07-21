<?php  

class Usuario extends model
{
	private $conn;

	public function __construct(){
		global $conn;

		$this->conn = $conn;
	}

	public function apagarImagem($img){
		if($img != 'default.jpg'){
			unlink('./assets/img/users/'.$img);
		}	
	}

	public function geraImagem($foto,$tipo,$apagarImagem = ''){
		if($tipo == 'image/png' || $tipo == 'image/jpeg'){
			$tmpname = md5(time().rand(0,9999)).'.jpg';

			move_uploaded_file($foto['tmp_name'],'./assets/img/users/'.$tmpname);

			list($width_orig,$height_orig) = getimagesize(BASE_URL.'assets/img/users/'.$tmpname);
			$radio = $width_orig / $height_orig;
			$width = 500;
			$height = 500;

			if($width/$height > $radio){
				$width = $height*$radio;
			}else{
				$height = $width/$radio;
			}

			$img = imagecreatetruecolor($width, $height);
			if($tipo == 'image/jpeg'){
				$origi = imagecreatefromjpeg(BASE_URL.'assets/img/users/'.$tmpname);
			}elseif($tipo == 'image/png'){
				$origi = imagecreatefrompng(BASE_URL.'assets/img/users/'.$tmpname);
			}

			imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

			imagejpeg($img,'./assets/img/users/'.$tmpname,80 );
			if($apagarImagem != ''){
				$this->apagarImagem($apagarImagem);
			}
		}else{
			$tmpname = 'default.jpg';
		}

		return $tmpname;
	}

	public function select(){
		$data = array();
		$sql = "SELECT * from clients ORDER BY id DESC";

		$sql = $this->conn->query($sql);

		if($sql->rowCount()>0){
			$data = $sql->fetchAll();
		}

		return $data;

	}

	public function getUsuario($id){
		$data= array();		

		$sql="SELECT * FROM clients WHERE id = '$id'";
		$sql = $this->conn->query($sql);

		if($sql->rowCount()>0){
			$data = $sql->fetch();
		}

		return $data;
	}

	public function insert($nome,$cpf,$dt_nasc,$tel,$email,$salario, $tmpname='default.jpg')
	{

		$sql = "INSERT INTO clients (nome,cpf,dt_nasc,telefone,email,salario,img) VALUES (:nome,:cpf,:dt_nasc,:telefone,:email,:salario,:img)";
		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":cpf",$cpf);
		$sql->bindValue(":dt_nasc",$dt_nasc);
		$sql->bindValue(":telefone",$tel);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":salario",$salario);
		$sql->bindValue(":img",$tmpname);
		$sql->execute();

		if($sql->rowCount()>0){
			header("Location:".BASE_URL);
		}else{
			echo "EROR";
		}
	}

	public function update($id,$nome,$cpf,$dt_nasc,$telefone,$email,$salario,$img){

		$sql = 'UPDATE clients SET nome = :nome, cpf = :cpf, dt_nasc = :dt_nasc, telefone = :telefone, email = :email, salario = :salario, img = :img WHERE id = :id';

		$sql = $this->conn->prepare($sql);
		$sql->bindValue(":nome",$nome);
		$sql->bindValue(":cpf",$cpf);
		$sql->bindValue(":dt_nasc",$dt_nasc);
		$sql->bindValue(":telefone",$telefone);
		$sql->bindValue(":email",$email);
		$sql->bindValue(":salario",$salario);
		$sql->bindValue(":img",$img);
		$sql->bindValue(":id",$id);
		$sql->execute();

	}
	public function getUrl(){
		return $_SERVER['REQUEST_URI'];
	}
}














?>