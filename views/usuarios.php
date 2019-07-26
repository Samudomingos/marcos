<h2 class="mt-1">Cadastrar Usuário <i class="fas fa-user"></i></h2>
<hr>
<form method="POST" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="exampleInputNome">Nome Completo</label>
        <input type="text" class="form-control" name="nome" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="exampleInputNome">CPF</label>
        <input type="text" class="form-control cpf" name="cpf" id="exampleInputNome" aria-describedby="emailHelp" placeholder="">
      </div>      
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="datepicker">Data de Nascimento</label>
        <input type="text" id="datepicker" name="dt_nasc" class="form-control datepicker">    
      </div> 
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="tel">Telefone</label>
        <input type="text" id="tel" name="tel" class="form-control tel">    
      </div> 
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" class="form-control" name="email">
      </div>
    </div>
    <div class="col-md">
      <div class="form-group">
        <label for="salario">Salário</label>
        <input type="text" id="salario" class="form-control salario" name="salario">
      </div>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <label></label>
      <div class="form-group">
            <input type="file" name="foto" onchange="previewImagem()" class="form-control p-0" style="cursor: pointer;" id="foto" placeholder='' />
      </div>
    </div>
    <div class="col-md-6">
      <label></label>
      <div class="form-group">
        <input type="submit" class="form-control btn btn-primary" Value="Enviar">
      </div>
    </div>
  </div>
</form> 

<img id="preview" width="150" height="150">
