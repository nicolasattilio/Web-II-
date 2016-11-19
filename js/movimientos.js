$(document).ready(function () {
function actualizarEventos(){
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
            event.preventDefault();
            return false;
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
          event.preventDefault();
          return false;
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
          event.preventDefault();
          return false;
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
          event.preventDefault();
          return false;
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
            event.preventDefault();
            return false;
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
event.preventDefault();
return false;

});
