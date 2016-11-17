<div class="container" >
  <form id="formulario" action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{if isset($partido)}{$partido['id_partido']}{/if}"><br>
    <label class="label label-default">EQUIPO</label>
    <br><select class="selectpicker show-tick" id="selector_equipo">
      {foreach from=$teams item=team}
        {if isset($partido) && $partido["id_local"]==$team["id"]}
          <option value='{$team["id"]}' selected="selected">{$team['equipo']}</option>
        {else}
          <option value='{$team["id"]}'>{$team['equipo']}</option>
        {/if}
      {/foreach}
    </select><br>
<table class="table">
  <tr>
    <th>Local</th>
    <th></th>
    <th>Visitante</th>
    <th>
    </th>
  </tr>
  {foreach from=$partidos item=partido}
  <tr>
  <td>{$partido['local']['equipo']} <img src="{$partido['local']['squad']}" class="img-circle" style="width: 40px;"></td>
  <td>VS</td>
  <td>{$partido['visitante']['equipo']} <img src="{$partido['visitante']['squad']}" class="img-circle" style="width: 40px;"></td>
  <td>{$partido['fecha']}PM</td>
  <td>Ver mas..</td>
</tr>
{/foreach}
</table>
</div>
