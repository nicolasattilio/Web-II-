<div class="row">
  <div class="container">
    <form id="formulario" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="{if isset($team)}{$team['id']}{/if}">
      <label>Nombre del Equipo: </label><input class="form-control" value="{if isset($team)}{$team['equipo']}{/if}" type="text" name="equipo">
      <label>Jugador nº1 </label><input class="form-control" value="{if isset($team)}{$team['jugador_1']}{/if}" type="text" name="jugador_1">
      <label>Jugador nº2 </label><input class="form-control" value="{if isset($team)}{$team['jugador_2']}{/if}" type="text" name="jugador_2">
      <label>Jugador nº3 </label><input class="form-control" value="{if isset($team)}{$team['jugador_3']}{/if}" type="text" name="jugador_3">
      <label>Jugador nº4 </label><input class="form-control" value="{if isset($team)}{$team['jugador_4']}{/if}" type="text" name="jugador_4">
      <label>Jugador nº5 </label><input class="form-control" value="{if isset($team)}{$team['jugador_5']}{/if}" type="text" name="jugador_5">
      <label>Escudo</label><input class="form-control" value="{if isset($team)}{$team['squad']}{/if}" type="file" name="escudo"></br>
      <input id="cargarEquipo" class="btn btn-success" type="submit" data-teamid="{if isset($team)}{$team['id']}{/if}" value="Inscribirse">
    </form>
  </div>
</div>
