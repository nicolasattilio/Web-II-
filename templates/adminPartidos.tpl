<div class="container" >
  <div class="table-responsive">
    <table class="table table-hover">
      <tr>
        <th>Local</th>
        <th>Visitante</th>
        <th></th>
        <th></th>
      </tr>
      {foreach from=$partidos item=partido}
      <tr>
        <td>{$partido['local']['equipo']}</td>
        <td>{$partido['visitante']['equipo']}</td>
        <td><button type="button" class="editPartido btn btn-success"  data-partidoid="{$partido['id_partido']}">Editar</button></td>
        <td><button type="button" class="deletePartido btn btn-warning" data-partidoid="{$partido['id_partido']}">Eliminar</button></td>
      </tr>
      {/foreach}
    </table>
    <button type="button" class="addPartido btn btn-primary">Agregar</button>
  </div>
</div>
