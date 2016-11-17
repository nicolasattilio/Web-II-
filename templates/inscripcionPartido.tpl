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
        <div class="row">
          <div class='col-sm-6'>
            <div class="form-group">
              <div class='input-group date' id='datetimepicker1'>
               <input type='text' class="form-control" name='fecha' value="{$partido['fecha']}"/>
                   <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                   </span>
                </div>
             </div>
           </div>
        </div>
    </form>
  </div>
<div class="container">
    <br>
    <input id="cargarPartido" class="btn btn-success" type="submit" data-partidoid="{if isset($partido)}{$partido['id']}{/if}" value="Inscribirse">
  </div>
</div>
