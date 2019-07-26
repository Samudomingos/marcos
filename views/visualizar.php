<form method="POST" enctype="multipart/form-data" id="editaForm">
  <div class="row">
    <div class="col-md-1">
      <div class="form-group">
        <img src="<?php echo BASE_URL ?>assets/img/users/<?php echo $img; ?>" width="80px" height="80px" class="img-thumbnail" border="0">
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="exampleInputNome">Nome Completo</label>
        <input type="text" disabled="disabled" class="form-control" value="<?php echo $nome ?>" name="nome" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="exampleInputNome">CPF</label>
        <input type="text" disabled="disabled" class="form-control cpf" value="<?php echo $cpf ?>" name="cpf" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>      
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="datepicker">Data de Nascimento</label>
        <input type="text" disabled="disabled" id="datepicker" value="<?php echo $dt_nasc ?>" name="dt_nasc" class="form-control datepicker">    
      </div> 
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text"disabled="disabled" id="tel" value="<?php echo $telefone ?>" name="tel" class="form-control tel">    
      </div> 
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" disabled="disabled" value="<?php echo $email ?>" class="form-control" name="email">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="salario">Salário</label>
        <input type="text" id="salario" disabled="disabled" value="<?php echo $salario ?>" class="form-control salario" name="salario">
      </div>
    </div>
  </div>
    

</form>