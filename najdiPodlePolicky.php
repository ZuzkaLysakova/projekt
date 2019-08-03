<?php
include 'database_init.php';
include 'projekt.php';
include 'formular.php';

search_form();
if(isset($_POST["policka"])){
    $policka = @mysql_query("SELECT * FROM evidenceofbooks WHERE shelf='".$_POST["policka"]."'");
    
    if($policka == false){
        throw new Exception(mysql_error());
    }

    $pocet = mysql_num_rows($policka);   
    //echo $pocet;

    for($i = 0; $i < $pocet; $i++){
        $vyhledejKnihy = mysql_fetch_array($policka);
        echo "<tr>". "<td>". $vyhledejKnihy["nameOfBook"] . "</td>". "<td>". $vyhledejKnihy["shelf"] . "</td>". "</tr>";
    }
    ?>
    </table>
    <BR>
    <?php
}
?>