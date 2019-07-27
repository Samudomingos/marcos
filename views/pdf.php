<?php ob_start();
$date = date('d/m/Y');; ?>
<head>    
 	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/style-pdf.css">
  	<link href="<?php echo BASE_URL ?>assets/css/jquery-ui.min.css" rel="stylesheet">
</head>

	<h1 style="text-align: center;font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;">Relatório de Usúarios</h1>
	<table id="customers" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
            <tr>
            	<th>Foto</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Salario</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($clients as $client): ?>
                <tr>
                	<td class="p-0 m-0"><div class="d-flex justify-content-center"><img class="img-responsive" width="66" height="66" src="<?php echo BASE_URL ?>assets/img/users/<?php echo $client['img']; ?>"></div></td>
                    <td><?php echo $client['nome']; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $client['cpf']; ?></td>
                    <td><?php echo $client['dt_nasc']; ?></td>
                    <td><?php echo $client['telefone']; ?></td>
                    <td><?php echo $client['salario']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</table>
<br>
<span style="margin-top: 10px">Emitido em: <?php echo $date;  ?></span>
<?php 
	$html = ob_get_contents();
	ob_end_clean();
	$pdf->WriteHTML($html);
	$pdf->Output();
?>
