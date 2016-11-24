<div class="container" >
<table class="table">
  <tr>
    <th>Nick</th>
    <th>Email</th>
    <th>Nivel</th>
    <th></th>
    <th></th>
  </tr>
  {foreach from=$usuarios item=usuario}
  <tr>
  <td>{$usuario['nick']}</td>
  <td>{$usuario['email']}</td>
  <td>{$usuario['nivel']}</td>
  <td><button type="button" class="cambiarNivel btn btn-success"  data-userid="{$usuario['id_user']}">Cambiar Nivel</button></td>
  <td><button type="button" class="deleteUsuario btn btn-warning" data-userid="{$usuario['id_user']}">Eliminar Usuario</button></td>
</tr>
{/foreach}
</table>
</div>
