<div class="container" id="pantallaEquipo">
<table class="table">
  <tr>
    <th>Escudo</th>
    <th>Equipo</th>
    <th>Arquero</th>
    <th>Defensor</th>
    <th>Defensor</th>
    <th>Atacante</th>
    <th>Atacante</th>
  </tr>
  {foreach from=$teams item=team}
  <tr>
    <td><img src="{$team['squad']}" class="img-circle" style="width: 40px;"></td>
    <td>{$team['equipo']}</td>
    <td>{$team['jugador_1']}</td>
    <td>{$team['jugador_2']}</td>
    <td>{$team['jugador_3']}</td>
    <td>{$team['jugador_4']}</td>
    <td>{$team['jugador_5']}</td>
    </td>
  </tr>
  {/foreach}
</ul>
</div>
