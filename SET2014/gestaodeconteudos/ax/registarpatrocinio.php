<!-- Modal -->
<div class="modal fade" id="registercontributionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Registar Patrocinador</h4>
      </div>
      <div class="modal-body">
        <div id="registerResponse" class="ajaxError"></div>

      <form id="registerForm" method="post" enctype="multipart/form-data" accept-charset="UTF-8" action='ax/submeterregistarpatrocinio.php'>
      <p>Empresa: </br>
      
      <select name = "nif"> 
            <?php
            $db_connection->forEachCompanyCall(function($nif, $nome, $morada, $localidade, $cp, $telefone, $fax, $email, $site) {
            echo("<option onchange=\"load_panel(this)\" value=\"$nif\">$nome</option>\n");
            });
            ?>
      </select>

      </p>
      </p>
      <p>Ano: <input type="text" name="ano" size = "70" placeholder="Inserir ano da contribuição"/></p>
      <p>Montante: <input type="text" name="montante" size = "70" placeholder="Inserir montante da contribuição"/></p>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary" id= "savechanges" onclick="savechangesRegisterCont()" >Guardar Registo</a>
    </div>
  </div>
</div>
</div>