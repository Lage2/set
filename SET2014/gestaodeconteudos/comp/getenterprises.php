<?php
    include "util/SETDB.php";

    $db_connection = new SETDB();
?>
<select name="nomeempresa" id="listaempresas" class="chosen-select" onchange="load_panel(this.value)">
<option value="" disabled selected>Seleccionar uma Empresa...</option>
<?php
    $db_connection->forEachCompanyCall(function($nif, $nome, $morada, $localidade, $cp, $telefone, $fax, $email, $site) {
        echo("<option onchange=\"load_panel(this)\" value=\"$nif\">$nome</option>\n");
    });
?>
</select></p>