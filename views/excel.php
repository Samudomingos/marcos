<?php ob_start();?>
<meta charset="utf-8">
	<table>
        <thead>
            <tr>
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
<?php 
	$html = ob_get_contents();
	ob_end_clean();

	$arquivo = 'relatorios.xls';

	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");

    header ("Cache-Control: no-cache, must-revalidate");

    header ("Pragma: no-cache");

    header ("Content-type: application/x-msexcel");

    header ("Content-Disposition: attachment; filename=\"$arquivo\"" );

    header ("Content-Description: PHP Generated Data" );
    echo $html;
    exit;	
    
?>
