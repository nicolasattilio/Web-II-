$(document).ready(function () {
  function actualizarEventos(){

    $('#datetimepicker1').datetimepicker({
      daysOfWeekDisabled: [0, 6]
    });

    $("#cargarEquipo").on("click",function () {
      var formData = new FormData($("#formulario")[0]);
      var teamId = $(this).data("teamid");
      $.ajax({
        url:"index.php?mode=" + ((teamId=='')? "insertTeam":"updateTeam"),
        data: formData,
        processData: false,
        contentType: false,
        method: 'POST',
        success: function(data){
          $('.pantalla').html(data);
        }
      });
      event.preventDefault();
      return false;
    });

    $("#selector_equipo").change(function(){
      var idEquipo=$(this).val();
      $.ajax({
        url:"index.php?mode=mostrarPartido&id="+idEquipo,
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $("#cargarPartido").on("click",function () {
      var formData = new FormData($("#formulario")[0]);
      var partidoid = $(this).data("partidoid");
      $.ajax({
        url:"index.php?mode=" + ((partidoid=='')? "insertPartido":"updatePartido"),
        data: formData,
        processData: false,
        contentType: false,
        method: 'POST',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $(".salir").on("click",function () {
      $.ajax({
        url:"index.php?mode=salir",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $(".ingresoUsuario").on("submit",function () {
      var formData = new FormData(this);
      $.ajax({
        url:"index.php?mode=ingresar",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        method: 'POST',
        success: function(data){
          $('body').html(data);
        }
      });
      event.preventDefault();
      return false;
    });

    $("#ingresarComentario").on("submit",function () {
      var formData = new FormData(this);
      $.ajax({
        url:"api/comentarios",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        method: 'POST',
        success: function(data){
        }
      });
      event.preventDefault();
      return false;
    });

    $(".salir").on("click",function () {
      $.ajax({
        url:"index.php?mode=salir",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
            $('body').html(data);
        }
      });
      event.preventDefault();
      return false;
    });


    $(".ingresar").on("click",function () {
      $.ajax({
        url:"index.php?mode=ingresar",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos()
        }
      });
      event.preventDefault();
      return false;
    });

    $(".addPartido").on("click",function () {
      $.ajax({
        url:"index.php?mode=mostrarAgregarPartido",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });




    $(".inscripcion").on("click",function () {
      $.ajax({
        url:"index.php?mode=mostrarformulario",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });


    $(".editPartido").on("click",function(){
      var partidoid = $(this).data("partidoid");
      $.ajax({
        url: "index.php?mode=editarPartido&id="+ partidoid,
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
    });

    $(".editTeam").on("click",function(){
      var teamId = $(this).data("teamid");
      $.ajax({
        url: "index.php?mode=editTeam&id=" + teamId,
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
    });

    $(".deleteTeam").on("click",function(){
      var teamId = $(this).data("teamid");
      $.ajax({
        url:"index.php?mode=deleteTeam&id=" + teamId,
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
    });

    $(".deletePartido").on("click",function(){
      var partidoid = $(this).data("partidoid");
      $.ajax({
        url:"index.php?mode=deletePartidos&id=" + partidoid,
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
    });

    $(".equipos").on("click",function () {
      $.ajax({
        url:"index.php?mode=mostrarteams",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();

        }
      });
      event.preventDefault();
      return false;
    });



    $(".partidos").on("click",function () {
      $.ajax({
        url:"index.php?mode=mostrarPartido",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $("#cargarImagen").on("submit",function(){
      var formData = new FormData(this);
      $.ajax({
        url:"index.php?mode=imagen",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        method: 'POST',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $(".nuevoUsuario").on("submit",function(){
      var formData = new FormData(this);
      $.ajax({
        url:"index.php?mode=nuevoUsuario",
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        method: 'POST',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });




      var temporizador;
    $(".navbar").on("click",StopTemporizador);

     function StopTemporizador() {
       clearInterval(temporizador);
     }



    $(".verImagenesComentarios").on("click",function(){
      var partidoid = $(this).data("partidoid");
      $.ajax({
        url:"index.php?mode=imagen_coment&id=" + partidoid,
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
          getComentarios(partidoid);
          temporizador = setInterval(function() {getComentarios(partidoid)}, 2000);
        }
      });
      event.preventDefault();
      return false;
    });

    function getComentarios(partidoid){
    $.get('api/comentarios/'+partidoid,function(data){
      crearComentarios(data);
    })
      }

    $("#registro").on("click",function(){
        $.ajax({
          url:"index.php?mode=registrousuario",
          dataType:'HTML',
          method: 'GET',
          success: function(data){
            $('.pantalla').html(data);
            actualizarEventos();
          }
        });
      });



    var templateComentario;
    $.ajax({url:'js/templates/comentario.mst',
    success: function(templateReceived) {
      templateComentario = templateReceived;
    }
  });


    function crearComentarios (data){
        var rendered = Mustache.render(templateComentario,{comentarios: data});
        $('.comentarios').html(rendered);
      }

    $(".home").on("click",function(){
      $.ajax({
        url:"index.php?home",
        dataType:'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
    });

    $(".adminEquipos").on("click",function () {
      $.ajax({
        url:"index.php?mode=administradorEquipos",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });

    $(".adminPartidos").on("click",function () {
      $.ajax({
        url:"index.php?mode=administradorPartidos",
        dataType: 'HTML',
        method: 'GET',
        success: function(data){
          $('.pantalla').html(data);
          actualizarEventos();
        }
      });
      event.preventDefault();
      return false;
    });
  }


  $.ajax({
    url:"index.php?mode=home",
    dataType:'HTML',
    method: 'GET',
    success: function(data){
      $('.pantalla').html(data);
      actualizarEventos();
    }
  });

});
