<div class="container" >
  <form id="formulario" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{if isset($partido)}{$partido['id_partido']}{/if}"><br>
    <label class="label label-default">EQUIPO</label>
    <br><select class="selectpicker show-tick" id="selector_equipo">
      <option value="">Todos</option>
      {foreach from=$teams item=team}
      {if isset($partido) && $partido["id_local"]==$team["id"]}
      <option value='{$team["id"]}' selected="selected">{$team['equipo']}</option>
      {else}
      <option value='{$team["id"]}'>{$team['equipo']}</option>
      {/if}
      {/foreach}
    </select><br>
    <div class="table-responsive">
      <table class="table table-hover">
        <tr>
          <th>Local</th>
          <th></th>
          <th>Visitante</th>
          <th>Horario de Partido</th>
          <th>Imagenes y comentarios<th>
          </tr>
          {foreach from=$partidos item=partido}
          <tr>
            <td>{$partido['local']['equipo']} <img src="{$partido['local']['squad']}" class="img-circle" style="width: 40px;"></td>
            <td>VS</td>
            <td>{$partido['visitante']['equipo']} <img src="{$partido['visitante']['squad']}" class="img-circle" style="width: 40px;"></td>
            <td>{$partido['fecha']}PM</td>
            <td><button type="button" class="verImagenesComentarios btn btn-success" data-partidoid="{$partido['id_partido']}">Ver mas..</button></td>
          </tr>
          {/foreach}
        </table>
      </div>
  </div>
