<div class="container">
  {if $user['nivel']==2}
  <div class="row">
    <form id="cargarImagen" action="" method="POST" enctype="multipart/form-data">
      <input value="{$partido['id_partido']}" type="hidden" name="id">
      <label>Imagen</label><input class="form-control" value="" type="file" name="picture[]" multiple></br>
      <input class="btn btn-success" type="submit" value="Agregar">
    </form>
  </div>
  {/if}
  <div class="row">
  {foreach from=$imagenes item=imagen}
  <div class="col-xs-6 col-md-3">
    <a href="{$imagen['picture']}" class="thumbnail">
      <img src="{$imagen['picture']}"/>
    </a>
    {if $user['nivel']==2}
    <button type="button" class="borrarImagen btn btn-warning" data-imagenid="{$imagen['id_imagen']}">Borrar Imagen</button></td>
    {/if}
  </div>
  {/foreach}
  </div>
  <h2>Comentarios:</h2>
  {if $user['nivel']>1}
  <div class="row">
    <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-2">
      <form id="ingresarComentario" class="form-horizontal" href="" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <input type="hidden" class="form-control" name="id_partido" value="{$partido['id_partido']}">
        </div>
        <div class="form-group">
          <input type="hidden" class="form-control" name="id_user" value="{$user['id_user']}">
        </div>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="comentario" placeholder="Escriba aquí su Comentario..." required></textarea>
        </div>
        <div class="form-group">
          <input type="number" max="5" min="1" class="form-control" placeholder="Puntaje" name="puntaje" value=""required="">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg"><strong>Comentar</strong></button>
        </div>
      </form>
    </div>
  </div>
  {/if}
  <div class="comentarios"></div>
  </div>
</div>
