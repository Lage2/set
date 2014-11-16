


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar</h4>
      </div>
      <div class="modal-body">
        <div id="editResponse" class="ajaxError"></div>
   		<?php 
        include "../util/SETDB.php";

        $nif = $_POST['nif'];

        $db_connection = new SETDB();
                
        $arrayWithInfo = $db_connection->getInfoFromCompanyWithNif($nif);
        
        $nome = $arrayWithInfo['Nome'];
        $morada = $arrayWithInfo['Morada'];
        $localidade = $arrayWithInfo['Localidade'];
        $cp = $arrayWithInfo['Código-Postal'];
        $telefone = $arrayWithInfo['Telefone'];
        $fax = $arrayWithInfo['Fax'];
        $email = $arrayWithInfo['Email'];
        $site = $arrayWithInfo['Site'];
		  ?>

 

     <form id="editForm" class="iform" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action='ax/submeter.php'>
      <p>Nome: <input type="text" name="nome" size = "70" value="<?php echo($nome); ?>"></p>
      <p>NIF: <input type="text" name="nif" size = "70" value="<?php echo($nif); ?>"></p>
      <p>Morada: <input type="text" name="morada" size = "70" value="<?php echo($morada); ?>"></p>
      <p>Localidade: <input type="text" name="localidade" size = "70" value="<?php echo($localidade); ?>"></p>
      <p>CP: <input type="text" name="cp" size = "70" value="<?php echo($cp); ?>"></p>
      <p>Telefone: <input type="text" name="telefone" size = "70" value="<?php echo($telefone); ?>"></p>
      <p>Fax: <input type="text" name="fax" size = "70" value="<?php echo($fax); ?>"></p>
      <p>Email: <input type="text" name="email" size = "70" value="<?php echo($email); ?>"></p>
      <p>Site: <input type="text" name="site" size = "70" value="<?php echo($site); ?>"></p>
      <tr><td> <input type="hidden" name="oldnif" size = "70" value="<?php echo($nif); ?>" ></td></tr>
      <p>Editar Logo: </p>
      <img id="uploadPreview" style="width: 100px; height: 100px;" src = "<?php echo $db_connection->getLogoFileFromCompanyWithNif($nif); ?>"/>
      <input id="uploadImage" type="file" name="myPhoto" accept="image/png,image/jpeg,image/gif,image/x-eps" onchange="PreviewImage();" />
    </form>
          



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id= "savechanges" onclick="savechanges()" >Guardar alterações</a>
    </div>
  </div>
</div>
</div>
