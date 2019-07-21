<div class="table-responsive">
<table id="example" class="table table-bordered table-light table-striped" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>Ações</th>
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
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="<?php echo BASE_URL ?>usuario/vizualizar/<?php echo $client['id']?>" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="left" title="Vizualizar"><i class="fas fa-eye"></i></a> 
                            <a href="<?php echo BASE_URL ?>usuario/alterar/<?php echo $client['id'] ?>" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Excluir"><i class="far fa-trash-alt"></i></a>
                        </div>    
                    </td>
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
</div>    