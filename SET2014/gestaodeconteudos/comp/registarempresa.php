


<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="regista" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="regista">Registar Empresa</h4>
      </div>
      <div class="modal-body">
        <div id="registerResponse" class="ajaxError"></div>
     <form id="registerForm" class="iform" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action='ax/submeterregisto.php'>
      <p>Nome: <input type="text" name="nome" size = "70"></p>
      <p>NIF: <input type="text" name="nif" size = "70"></p>
      <p>Morada: <input type="text" name="morada" size = "70"></p>
      <p>Localidade: <input type="text" name="localidade" size = "70"></p>
      <p>CP: <input type="text" name="cp" size = "70"></p>
      <p>Telefone: <input type="text" name="telefone" size = "70"></p>
      <p>Fax: <input type="text" name="fax" size = "70"></p>
      <p>Email: <input type="text" name="email" size = "70"></p>
      <p>Site: <input type="text" name="site" size = "70"></p>
      <tr><td> <input type="hidden" name="oldnif" size = "70"></td></tr>
      <p>Editar Logo: </p>
      <img id="uploadRegisterPreview" style="width: 100px; height: 100px;" src = "img/logoempresas/noImage.jpg"/>
      <input id="uploadRegisterImage" type="file" name="myPhoto" accept="image/png,image/jpeg,image/gif,image/x-eps" onchange="PreviewRegisterImage();" />
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id= "savechanges" onclick="savechangesregister()" >Guardar alterações</a>
    </div>
  </div>
</div>
</div>
