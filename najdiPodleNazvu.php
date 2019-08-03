<?php
include 'database_init.php';
include 'projekt.php';
include 'formular.php';

search_form();
if(isset($_POST["nazevKnihy"])){
    $kniha = @mysql_query("SELECT * FROM evidenceofbooks WHERE nameOfBook='".$_POST["nazevKnihy"]."'");
    
    if($kniha == false){
        throw new Exception(mysql_error());
    }

    $pocet = mysql_num_rows($kniha);   
    //echo $pocet;

    for($i = 0; $i < $pocet; $i++){
        $vyhledejKnihy = mysql_fetch_array($kniha);
        echo "<tr>". "<td>". $vyhledejKnihy["nameOfBook"] . "</td>". "<td>". $vyhledejKnihy["shelf"] . "</td>". "</tr>";
    }
    ?>
    </table>
    <BR>
    <?php
}
?>