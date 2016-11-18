<div class="row">
  <div class="container">
    <form id="formulario" action="" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="{if isset($partido)}{$partido['id_partido']}{/if}"><br>
      <label class="label label-default">Local </label>
      <br><select class="selectpicker show-tick"  name="id_local">
        {foreach from=$teams item=team}
          {if isset($partido) && $partido["id_local"]==$team["id"]}
            <option value='{$team["id"]}' selected="selected">{$team['equipo']}</option>
          {else}
            <option value='{$team["id"]}'>{$team['equipo']}</option>
          {/if}
        {/foreach}
      </select><br>
      <br><label class="label label-default">Visitante </label>
      <br><select class="selectpicker" name="id_visitante">
        {foreach from=$teams item=team}
          {if isset($partido) && $partido["id_visitante"]==$team["id"]}
            <option value='{$team["id"]}' selected="selected">{$team['equipo']}</option>
          {else}
            <option value='{$team["id"]}'>{$team['equipo']}</option>
          {/if}
        {/foreach}
      </select><br>
      <br><label class="label label-default">Dia</label>
      <div class="well">
        <div id="datetimepicker1" class="input-append date">
          <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
          <span class="add-on">
            <i data-time-icon="icon-time" data-date-icon="icon-calendar">
            </i>
          </span>
        </div>
      </div>
    </form>
  </div>
<div class="container">
    <br>
    <input id="cargarPartido" class="btn btn-success" type="submit" data-partidoid="{if isset($partido)}{$partido['id']}{/if}" value="Inscribirse">
  </div>
</div>
