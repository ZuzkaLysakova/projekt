<?php
include 'database_init.php';
include 'projekt.php';
if(($_POST["nazevKnihy"] != "") && ($_POST["policka"] != "")){
    $dotaz=mysql_query("SELECT MAX(id) FROM evidenceofbooks"); 
    $poleHodnot = mysql_fetch_array($dotaz); 
    $dasliKlic = $poleHodnot['MAX(id)'] + 1;

    $kniha="INSERT INTO evidenceofbooks(`id`,`nameOfBook`,`shelf`) VALUES ('"
        .mysql_real_escape_string($dasliKlic)."','"
        .mysql_real_escape_string($_POST["nazevKnihy"])."','"
        .mysql_real_escape_string($_POST["policka"])."');";
    $vysledek = @mysql_query($kniha);

    if(!($vysledek)){
        echo "<b>Chyba: nelze zapsat knihu. Poruseni integritních omezení</b><BR>";
    }
    else{
     echo "<b>Přidání proběhlo v pořádku </b><BR>";
    }

}else{
    echo "<b>Zadejte název knihy nebo poličku!</b>";
}

?>
