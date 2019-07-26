<div class="row">
    <div class="col-md">
        <h2 class="mt-1">Gerenciador de Úsuários <i class="fas fa-users"></i></h2>
    </div>
    <div class="col-md">
        <div style="position: relative; top:100px" class="d-flex justify-content-end">
<nav class="navbar navbar-light bg-light">
  <div class="form-inline">
    <input id="id" class="form-control mr-sm-2" type="search" placeholder="ID" aria-label="Search">
    <button class="btn btn-outline-secondary my-2 my-sm-0" data-toggle="modal" onclick="receber()" data-target="#exampleModalCenter" type="button">Procurar</button>
  </div>
</nav>
</div>
    </div>
    
</div>
<hr>


<div  class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Nascimento</th>
                <th>Telefone</th>
                <th>Salario</th>
            </tr>
        </thead>
    </table>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger">
            <h5 class="modal-title text-light" id="exampleModalLabel">Deseja Realmente Deletar esse Usúario?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h5 id="msgDel"></h5>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="button" id="delConfirm" class="btn btn-primary">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>        
            </div>
        </div>
    </div> 
</div>  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Opções de Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Você deseja <span class="text-danger">Excluir</span> ou <span class="text-primary">Editar</span> o úsuario?</h4>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="nome"></td>
                    <td id="cpf"></td>
                    
                </tr>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" id="editar" class="btn btn-primary">Editar</button>
        <button type="button" id="excluir" class="btn btn-danger">Excluir</button>
      </div>
    </div>
  </div>
</div>  
