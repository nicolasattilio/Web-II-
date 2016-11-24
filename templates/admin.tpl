<div class="container">
  <div class="table-responsive">
    <table class="table table-hover">
      <tr>
        <th>Equipo</th>
        <th>Arquero</th>
        <th>Defensor</th>
        <th>Defensor</th>
        <th>Atacante</th>
        <th>Atacante</th>
        <th></th>
        <th></th>
      </tr>
      {foreach from=$teams item=team}
      <tr>
        <td>{$team['equipo']}</td>
        <td>{$team['jugador_1']}</td>
        <td>{$team['jugador_2']}</td>
        <td>{$team['jugador_3']}</td>
        <td>{$team['jugador_4']}</td>
        <td>{$team['jugador_5']}</td>
        <td>{$team['id']}</td>
        <td><button type="button" class="editTeam btn btn-success"  data-teamid="{$team['id']}">Editar</button></td>
        <td><button type="button" class="deleteTeam btn btn-warning" data-teamid="{$team['id']}">Eliminar</button></td>
      </tr>
      {/foreach}
    </table>
    <button type="button" class="inscripcion btn btn-primary">Agregar</button>
  </div>
</div>
