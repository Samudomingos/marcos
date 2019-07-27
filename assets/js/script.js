jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

  $("#close-sidebar").click(function() {
    $(".page-wrapper").removeClass("toggled");
  });
  $("#show-sidebar").click(function() {
    $(".page-wrapper").addClass("toggled");
  });     
});

function bs_input_file() {
  $(".input-file").before(
    function() {
      if ( ! $(this).prev().hasClass('input-ghost') ) {
        var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
        element.attr("name",$(this).attr("name"));
        element.change(function(){
          element.next(element).find('input').val((element.val()).split('\\').pop());
        });
        $(this).find("button.btn-choose").click(function(){
          element.click();
        });
        $(this).find("button.btn-reset").click(function(){
          element.val(null);
          $(this).parents(".input-file").find('input').val('');
        });
        $(this).find('input').css("cursor","pointer");
        $(this).find('input').mousedown(function() {
          $(this).parents('.input-file').prev().click();
          return false;
        });
        return element;
      }
    }
  );
}
$(function() {
  bs_input_file();
});

function previewImagem(){
  var imagem = document.querySelector('input[name=foto]').files[0];
  var preview = document.querySelector('#preview');
  var pronto = new FileReader();

  pronto.onloadend = function(){
    preview.src= pronto.result;
  }

  if(imagem){
    pronto.readAsDataURL(imagem);
  }else{
    preview.src="";
  }
}

function receber(id){
 
  var qt = $('td').length;

  for (var i=0 ; i < qt; i+=7) {
    if($('td').eq(i).find('button').attr('id') == id){
      var  nome = $('td')[i+1].innerHTML;
      var cpf = $('td')[i+3].innerHTML;

  }

  $('#nome').html(nome);
  $('#cpf').html(cpf);

  }

  $('#editar').click(function(){
    window.location.href = "http://marcos.crud.com/usuario/alterar/"+id;
  });
  $('#excluir').click(function(){
    window.location.href = "http://marcos.crud.com/usuario/excluir/"+id;
  });
  
}

$('#editaForm').on('submit',function(e){
  e.preventDefault();
  let url_atual = window.location.href;
 
  var form = $('#editaForm')[0];
  var data = new FormData(form); 
  console.log(data);

  $.ajax({
    type:'POST',
    url: url_atual,
    data: data,
    contentType:false,
    processData:false,
    success:function(msg){
      alert("Usuário alterado com sucesso!");
    }
  });


});






