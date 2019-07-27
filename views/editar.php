<h2 class="mt-1">Editar de Úsuário</h2>
<hr>
<form method="POST" enctype="multipart/form-data" id="editaForm">
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="exampleInputNome">Nome Completo</label>
        <input type="text" class="form-control" value="<?php echo $nome ?>" name="nome" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="exampleInputNome">CPF</label>
        <input type="text" class="form-control cpf" value="<?php echo $cpf ?>" name="cpf" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>      
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="datepicker">Data de Nascimento</label>
        <input type="text" id="datepicker" value="<?php echo $dt_nasc ?>" name="dt_nasc" class="form-control datepicker">    
      </div> 
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text" id="tel" value="<?php echo $telefone ?>" name="tel" class="form-control tel">    
      </div> 
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" value="<?php echo $email ?>" class="form-control" name="email">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="salario">Salário</label>
        <input type="text" id="salario" value="<?php echo $salario ?>" class="form-control salario" name="salario">
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <label></label>
      <div class="form-group">
            <input type="file" onchange="previewImagem()" name="foto" class="form-control-file" id="foto" placeholder='' />
      </div>
    </div>
    <div class="col-md-6">
      <label></label>
      <div class="form-group">
        
        <input type="submit"  class="form-control btn btn-primary " Value="Enviar">
      </div>
    </div>
  </div>
</form>
<img id="preview" width="150" height="150" src="<?php echo BASE_URL.'assets/img/users/'.$img ?>">