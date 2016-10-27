<div class="container" >
<table class="table">
  <tr>
    <th>Local</th>
    <th></th>
    <th>Visitante</th>
    <th>Horario de Partido</th>
  </tr>
  {foreach from=$partidos item=partido}
  <tr>
  <td>{$partido['local']['equipo']} <img src="{$partido['local']['squad']}" class="img-circle" style="width: 40px;"></td>
  <td>VS</td>
  <td>{$partido['visitante']['equipo']} <img src="{$partido['visitante']['squad']}" class="img-circle" style="width: 40px;"></td>
  <td>{$partido['fecha']}PM</td>
</tr>
{/foreach}
</table>
</div>
