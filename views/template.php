
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Marcos</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL ?>assets/css/style.css">
  <link href="<?php echo BASE_URL ?>assets/css/jquery-ui.min.css" rel="stylesheet">

</head>

<body style="background-color:rgb(246,247,250); ">
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Menu</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" height="120" width="120" src="<?php echo BASE_URL ?>assets/img/photo.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">
            <strong>Marcos</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>Geral</span>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Dashboard 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>E-commerce</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li>
            <a href="<?php echo BASE_URL; ?>">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sidebar-dropdown" style="cursor: pointer;">
            <a>
              <i class="far fa-gem"></i>
              <span>Cadastros</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo BASE_URL ?>usuario">Usuários</a>
                </li>
                <!-- <li>
                  <a href="#"></a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li> -->
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown" style="cursor: pointer;">
            <a>
              <i class="fa fa-chart-line"></i>
              <span>Export</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?php echo BASE_URL ?>usuario/excel">Excel</a>
                </li>
                <li>
                  <a target="_blank" href="<?php echo BASE_URL ?>usuario/pdf">PDF</a>
                </li>
               <!--  <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li> -->
              </ul>
            </div>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a style="cursor: pointer;" id="import-click">
              <i class="fa fa-book"></i>
              <span>Importação</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendario</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Exemplos</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification"></span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification"></span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="<?php echo BASE_URL ?>usuario/deslogar">
        <i class="fa fa-power-off"></i>
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
	<main class="page-content mt-0 pt-0">
    <div class="container-fluid">
      <div>
  	      <!-- <div class="row">
  	        <div class="form-group col-md-12">
  	          <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4 framework.</p>
  	          <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template" target="_blank">
  	              Github</a>, it contains more themes and background image option</p>
  	        </div> -->
		     <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
		</div>

<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importação <i class=" text-success fas fa-file-excel"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL ?>">
        <div class="modal-body">
            <div class="form-group">
              <label for="exampleFormControlFile1">Escolha seu arquivo</label>
              <input type="file" name="importData" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>


	</main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
	<script type="text/javascript" src="<?php echo BASE_URL ?>node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL.'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'; ?>" ></script>
	<script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/script.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL ?>assets/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL ?>node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

    <script type="text/javascript">

      $('#import-click').click(function(){
        $('#import').modal('show');
      });
      
      var url = window.location.href;
      console.log(url+'ajax');
      $(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": url+'ajax',
            "type": "POST"
        },
        "columnDefs": [
        {
            "targets": 0, //"Número referente a coluna, startando no 0"
            "render": function (data, type, row) {
                //Aqui tem um callback onde pode retornar o botão
                //row - aqui você possui todos os atributos da sua linha
                //Basta criar seu botão e como string e retornar;
               
                var deleteBtn = '<button type="button" id="'+data+'" data-toggle="modal" onclick="receber('+data+')" data-target="#exampleModalCenter" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="left" title="Excluir"><i class="far fa-trash-alt"></i></button>';
                var editeBtn = '<a href="'+window.location.href+'usuario/alterar/'+data+'" class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="left" title="Editar"><i class="fas fa-edit"></i></a>';     
                return editeBtn+' '+deleteBtn;
            }
        }
    ],
        pageLength : 10,
          "pagingType": "full_numbers",
            "language": {
              "search": "Procurar",
            "paginate": {
              "first":"Primeiro",
              "previous": "Anterior",
              "next": "Próximo",
              "last": "Último"
            }
          },
          "ordering": true,
          "dom": '<"toolbar">frtip',
          "info":false,
          "show": false
    } );

		/*$(document).ready(function() {
      console.log(window.location.href);
		    $('#example').DataTable({
          "processing":true,
          "serverSide":true,
          "ajax":{
            "url": window.location.href,
            "type": "POST"
          },
          pageLength : 6,
		    	"pagingType": "full_numbers",
		    	  "language": {
		    	  	"search": "Procurar",
				    "paginate": {
				      "first":"Primeiro",
				      "previous": "Anterior",
				      "next": "Próximo",
				      "last": "Último"
				    }
				  },
		    	"ordering": true,
		    	"dom": '<"toolbar">frtip',
    			"info":false,
    			"show": false
		    });*/
    $('.datepicker').mask('00/00/0000');    
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.tel').mask('(00) 00000-0000');
    $('.salario').mask("#.##0,00", {reverse: true});
		$('.form-control').removeClass('form-control-sm');
		$('#example_paginate').addClass('d-flex justify-content-center');
    $('.dataTables_empty').html('<h6>Não existem úsuarios cadastrados<h6>');



		} );
	</script>
</body>
