<div class="container">
  <div class="row">
    <form id="cargarImagen" action="" method="POST" enctype="multipart/form-data">
      <input value="{$partido['id_partido']}" type="hidden" name="id">
      <label>Imagen</label><input class="form-control" value="" type="file" name="picture[]" multiple></br>
      <input class="btn btn-success" type="submit" value="Agregar">
    </form>
  </div>
  <div class="row">
  {foreach from=$imagenes item=imagen}
  <div class="col-xs-6 col-md-3">
    <a href="{$imagen['picture']}" class="thumbnail">
      <img src="{$imagen['picture']}"/>
    </a>
  </div>
  <button type="button" class="borrarImagen btn btn-warning" data-imagenid="{$imagen['id_imagen']}">Borrar Imagen</button></td>
  {/foreach}
  </div>
  <h2>Comentarios:</h2>
</div>
