<?php
// funzione che genera un menu HTML
// $nome è il name del menu
// $lista è un array che contiene le opzioni
// $multi se true genera un menu a scelta multipla

function generaMenu($nome,$lista,$multi) {
    if($multi)
        $m = "multiple=\"on\" size=\"".count($lista)."\"";
    else
        $m = "";
    
    echo "<select class=\"selectStyle\" $m name=\"$nome\">";
    foreach($lista as $o)
      echo "<option value=\"$o\">$o</option>";
    echo "</select>";
}
?>

