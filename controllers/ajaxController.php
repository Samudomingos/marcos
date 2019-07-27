<?php 
header("Content-Type: text/html; charset=UTF-8",true);
class ajaxController extends controller
{
	private $usuario;
	 
	 function __construct(){
	 	$this->usuario = new Usuario();
	 }
	
	public function index(){

		$requestData = $_REQUEST;

		$columns = array( 
			0 =>'id', 
			1 =>'img',
			2 =>'nome',
			3 =>'email',
			4 =>'cpf',
			5 =>'dt_nasc',
			6 =>'telefone', 
			7 =>'salario'
		);

		$linhas = count($this->usuario->select());
	
		$query = "SELECT id, nome, email, cpf, dt_nasc, telefone, salario from clients WHERE 1=1";


		if(!empty($requestData['search']['value'])){
			$query .= " AND nome LIKE '".$requestData['search']['value']."%'";
			$query .= "OR cpf LIKE '".$requestData['search']['value']."%'";
			$query .= "OR dt_nasc LIKE '".$requestData['search']['value']."%'";
			$query .= "OR telefone LIKE '".$requestData['search']['value']."%'";
			$query .= "OR email LIKE '".$requestData['search']['value']."%'";
			$query .= "OR salario LIKE '".$requestData['search']['value']."%'";
		}

		

		$result = $this->usuario->execute($query);
		$totalfiltrados = count($result);

if(isset($requestData['order'])){
		$query.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
}

		
		$rawQuery = $this->usuario->execute($query);
		
		
//echo json_encode($rawQuery);
		 
		$json_data = array(
			"draw" =>intval($requestData['draw']),
			"recordsTotal" => intval( $linhas ),  
			"recordsFiltered" => intval( $totalfiltrados ),
			"data" => $rawQuery
		);

		echo json_encode($json_data);

	}
}


 ?>

