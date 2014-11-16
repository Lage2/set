<?php
    include "util/SETDB.php";

    $db_connection = new SETDB();
?>
<select name="idcontribuicao" id="listacontribuicoes" class="chosen-select" onchange="load_panel(this.value)">
<option value="" disabled selected>Seleccionar uma Contribuição...</option>
<?php
    $db_connection->forEachContributionCall(function($nif, $nome, $ano, $montante) {
        echo("<option onchange=\"load_panel(this)\" value=\"$nif\">[$ano] $nome</option>\n");
    });
?>
</select></p>